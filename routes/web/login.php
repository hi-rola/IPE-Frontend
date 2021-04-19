<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/home', 'LoginController@validarLogin')->name('validarLogin');