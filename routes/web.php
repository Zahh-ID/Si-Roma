<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'new-welcome')->name('landing');

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::view('/', 'dashboard.index')->name('index');
    Route::view('/katalog', 'dashboard.catalog')->name('catalog');
    Route::view('/si-bot', 'dashboard.si-bot')->name('si-bot');
    Route::view('/lacak-pesanan', 'dashboard.tracking')->name('track');
});
