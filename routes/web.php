<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('wifi-scanner', 'wifi-scanner')->name('wifi-scanner');
    Route::view('ble-scanner', 'ble-scanner')->name('ble-scanner');
    Route::view('attack-panels', 'attack-panels')->name('attack-panels');
});

require __DIR__.'/settings.php';
