<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login/old', 'Auth\SSOLoginController@login')->name('auth.login.old');
    Route::get('login/old/verify', 'Auth\SSOLoginController@verifyLogin')->name('auth.login.old.verify');
    Route::get('login', 'Auth\LoginController@login')->name('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('logout', 'Auth\LoginController@logout')->name('auth.logout');
    Route::resource('discord', 'DiscordController')->only('create');
});