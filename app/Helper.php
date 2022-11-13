<?php

use App\Lib\JWT\JWT;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

if (! function_exists('c')) {
    function c(string $key)
    {
        return App::make($key);
    }
}

if (! function_exists('authed')) {
    function authed(): Model|Collection|Builder|array|null
    {
        $token = session()->get('token');

        return empty($token) ? null : (User::query()->find(JWT::match($token)->id));
    }
}
