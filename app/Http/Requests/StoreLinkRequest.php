<?php

namespace App\Http\Requests;

use Carbon\Carbon;
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
//                'max:512000',
            ],
            'original_link' => [
                'required',
                'regex:/[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/i',
            ],
            'short_link_name' => [
                'required',
                'regex:/[A-Za-z0-9_\-\.]+/',
            ],
            'expired_at' => [
                'nullable',
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

    public function prepareForValidation(): void
    {
        $expired_at = (int) $this->get('expired_at');
        $is_redirect_directly = ($this->get('is_redirect_directly') === 'true') === false;
        $password = $is_redirect_directly === true ? null : ($this->get('password'));

        $this->merge([
            'is_redirect_directly' => $is_redirect_directly,
            'expired_at' => $expired_at === 0 ? Carbon::now()->year(3000) : Carbon::now()->addDays($expired_at),
            'password' => $password,
        ]);
    }
}
