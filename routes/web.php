<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('about', 'about')->name('about');

Route::prefix('likes')->group(function () {
    Route::get('/', 'LikeController@index')->name('likes');
});

Route::prefix('chat')->group(function () {
    Route::get('/', 'ChatController@index')->name('chat');
});

Route::prefix('profile')->group(function () {
    Route::get('/', 'ProfileController@index')->name('profile');
});

Route::prefix('preference')->group(function () {
    Route::get('/', 'PreferenceController@index')->name('preference');
});

