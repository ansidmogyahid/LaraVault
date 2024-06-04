<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('starter');
})->name('dashboard');

Route::get('/settings', function () {
    return 'Settings';
})->name('settings');

Route::get('/roles-and-permissions', function () {
    return view('web.roles.index');
})->name('roles-and-permissions');
