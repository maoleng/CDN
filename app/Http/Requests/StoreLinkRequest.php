<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLinkRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'file' => [
                'required',
                'max:512000',
            ],
            'original_link' => [
                'required',
                'regex:/[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/gi',
            ],
            'short_link_name' => [
                'required',
                'regex:/[A-Za-z0-9_\-\.]+/',
            ],
            'is_redirect_directly' => [
                'required',
                'boolean',
            ],
            'password' => [
                'nullable',
            ],
        ];
    }
}
