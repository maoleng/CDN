<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Lib\JWT\JWT;
use App\Models\Device;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class DeviceController extends Controller
{
    public function generateToken($user)
    {
        return c(JWT::class)->encode([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
        ]);
    }

    public function createDevice($device_uuid, $user = null): Builder|Model
    {
        $device = Device::query()->firstOrNew(
            [
                'device_uuid' => $device_uuid,
                'user_id' => $user?->id,
            ],
            [
                'user_id' => $user?->id,
                'device_uuid' => $device_uuid,
            ]
        );
        $device->token = $user === null ? null : ($this->generateToken($user));
        $device->save();

        return $device;
    }

}
