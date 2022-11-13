<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Models\CDN;
use App\Models\Link;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;

class LinkController extends Controller
{
    public function index(): View
    {
        return view('link');
    }

    public function store(StoreLinkRequest $request): array
    {
        $data = $request->validated();
        if (isset($data['file'])) {
            $file = $this->uploadFile($data['file'], $data['device_uuid']);
            $url = $this->createCompactLink($file, $data);
        } else {
            $compact = ['source' => $data['link_to_compact'], 'size' => null];
            $url = $this->createCompactLink($compact, $data);
        }

        return [
            'status' => true,
            'message' => $url,
            'errors' => [],
        ];
    }

    private function createCompactLink($compact_source, $data): string
    {
        try {
            $cdn = CDN::query()->create([
                'source' => $compact_source['source'],
                'size' => $compact_source['size'],
            ]);
            $device = (new DeviceController())->createDevice($data['device_uuid'], authed());
            $link = Link::query()->create([
                'compacted_link' => $data['compacted_link'],
                'expired_at' => $data['expired_at'],
                'is_redirect_directly' => $data['is_redirect_directly'],
                'cdn_id' => $cdn->id,
                'device_id' => $device->id,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'errors' => $e->getTrace(),
            ]);
        }

        return $link->url;
    }

    #[ArrayShape(['source' => "string", 'size' => "mixed"])]
    private function uploadFile($file, $device_uuid): array
    {
        $file_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $file_name = Str::random(7).'-'.Str::slug($file_name, '_').'.'.$file->getClientOriginalExtension();
        $file_name = Str::limit($file_name);
        if (authed() === null) {
            $path = 'guests/'.$device_uuid.'/'.$file_name;
        } else {
            $path = 'users/'.authed()->id.'/'.$file_name;
        }
        Storage::disk('s3')->put($path, file_get_contents($file));

        return [
            'source' => $path,
            'size' => $file->getSize() / 1000, // kilobyte
        ];
    }
}
