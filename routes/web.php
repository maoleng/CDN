<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

/*

chuc nang upload file


*/
Route::get('/test', function () {
    return redirect()->to('https://ssl.gstatic.com/ui/v1/icons/mail/rfr/logo_gmail_lockup_dark_1x_r5.png');
})->name('test');

Route::group(['prefix' => 'links', 'as' => 'link.'], static function () {
    Route::get('/', [LinkController::class, 'index'])->name('index');
    Route::post('/store', [LinkController::class, 'store'])->name('store');
});

Route::get('/', function () {
    return view('welcome');
});
