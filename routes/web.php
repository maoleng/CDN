<?php

use App\Http\Controllers\LinkController;
use App\Models\Link;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'links', 'as' => 'link.'], static function () {
    Route::get('/', [LinkController::class, 'index'])->name('index');
    Route::post('/store', [LinkController::class, 'store'])->name('store');
});



Route::get('/', function () {
//    $a = DB::;
//    dd($a);
    return view('welcome');
});

Route::get('{name}', function ($name) {
    $link = Link::query()->where('compacted_link', $name)->first();

    return isset($link) ? redirect()->to($link->rootUrl) : abort(404);
});
