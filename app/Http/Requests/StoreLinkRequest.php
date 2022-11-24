<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;

class StoreLinkRequest extends BaseRequest
{

    #[ArrayShape([
        'file' => "string[]", 'text_to_compact' => "array", 'compacted_link' => "string[]", 'expired_at' => "string[]",
        'is_redirect_directly' => "string[]", 'password' => "string[]", 'device_uuid' => "string[]"
    ])]
    public function rules(): array
    {
        return [
            'file' => [
                'required_without:text_to_compact',
                'max:512000000',
            ],
            'text_to_compact' => [
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
                'unique:links,compacted_link',
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
        $text_to_compact = $this->get('text_to_compact') === 'null' ? null : $this->get('text_to_compact');
        if (isset($text_to_compact)) {
            $str_regex_url = '/^(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})$/';
            preg_match($str_regex_url, $text_to_compact, $match);
            if (isset($match[0])) {
                $file_type = null;
                $text = null;
                $url = $text_to_compact;
            } else {
                $url = null;
                preg_match('/^{{\w+}}/', $text_to_compact, $match);
                if (isset($match[0])) {
                    $file_type = substr($match[0], 2, -2);
                    $text = str_replace($match[0], '', $text_to_compact);
                } else {
                    $file_type = 'txt';
                    $text = $text_to_compact;
                }
            }
        }
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
            'text_to_compact' => [
                'url' => $url ?? null,
                'text' => $text ?? null,
                'file_type' => $file_type ?? null,
            ],
            'wtf' => $text_to_compact,
            'is_redirect_directly' => $is_redirect_directly,
            'expired_at' => $expired_at,
            'password' => $password,
            'compacted_link' => $compacted_link,
        ]);
    }
}
