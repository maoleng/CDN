<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreLinkRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'file' => [
                'required_without:link_to_compact',
                'max:512000000',
            ],
            'link_to_compact' => [
                'required_without:file',
                function ($attribute, $value, $fail) {
                    if (isset($value, $this->file)) {
                        return $fail('Đừng làm thế babi');
                    }
                },
            ],
            'compacted_link' => [
                'required',
                'regex:/[A-Za-z0-9_\-\.]+/',
                'min:3',
                'max:100',
            ],
            'expired_at' => [
                'nullable',
                'min:0',
            ],
            'is_redirect_directly' => [
                'required',
                'boolean',
            ],
            'password' => [
                'nullable',
            ],
            'device_uuid' => [
                'required',
            ],
        ];
    }

    public function prepareForValidation(): void
    {
        $file = $this->get('file') === 'null' ? null : $this->get('file');
        $link_to_compact = $this->get('link_to_compact') === 'null' ? null : $this->get('link_to_compact');
        $expired_at = (int) $this->get('expired_at');
        $expired_at = ($expired_at === 0 || $expired_at < 0) ?
            Carbon::now()->year(3000) :
            Carbon::now()->addDays($expired_at);
        $is_redirect_directly = ($this->get('is_redirect_directly') === 'true') === false;
        $password = $is_redirect_directly === true ? null : ($this->get('password'));
        $compacted_link = $this->compacted_link ?? Str::random(10);

        if (empty(authed())) {
            $expired_at = Carbon::now()->year(3000);
            $is_redirect_directly = true;
            $password = null;
            $compacted_link = Str::random(10);
        }

        $this->merge([
            'file' => $file,
            'link_to_compact' => $link_to_compact,
            'is_redirect_directly' => $is_redirect_directly,
            'expired_at' => $expired_at,
            'password' => $password,
            'compacted_link' => $compacted_link,
        ]);
    }
}
