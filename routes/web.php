<?php

use App\Http\Controllers\LinkController;
use App\Models\Link;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::group(['domain' => 'cdn.cdn.test'], static function () {
    Route::get('/', static function () {
        return view('welcome');
    });
    Route::group(['prefix' => 'links', 'as' => 'link.'], static function () {
        Route::get('/', [LinkController::class, 'index'])->name('index');
        Route::post('/store', [LinkController::class, 'store'])->name('store');
    });
});

Route::group(['domain' => 'cdn.test'], static function () {
    Route::get('/{name}', static function ($name) {
        $link = Link::query()->where('compacted_link', $name)->first();

        return isset($link) ? redirect()->to($link->rootUrl) : abort(404);
    });
});
