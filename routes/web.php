<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FrontEndController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return redirect('login');
});

Route::controller(CustomAuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/custom-login', 'customLogin')->name('login.custom');
    Route::get('/register', 'register')->name('register-user');
    Route::post('/custom-registration', 'customRegister')->name('register.custom');
    Route::get('signout','signOut')->name('signout');
});

Route::controller(FrontEndController::class)->group(function () {
    Route::get('/spesifikasi', 'spesifikasi')->name('spesifikasi');
    Route::get('/nomor', 'nomor')->name('nomor');
    Route::get('/pemilik', 'pemilik')->name('pemilik');
    Route::get('/service', 'service')->name('service');
    Route::get('/detail/{id}', 'show')->name('detail');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::patch('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('destroy');
});