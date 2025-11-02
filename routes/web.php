<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'new-welcome')->name('landing');

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::view('/', 'user.dashboard.index')->name('index');
    Route::view('/katalog', 'user.dashboard.catalog')->name('catalog');
    Route::view('/si-bot', 'user.dashboard.si-bot')->name('si-bot');
    Route::view('/lacak-pesanan', 'user.dashboard.tracking')->name('track');
});
