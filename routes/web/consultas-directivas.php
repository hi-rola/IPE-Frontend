<?php

use Illuminate\Support\Facades\Route;

//Consultas directivas
Route::get('/consultas-directivas', 'ConsultasDirectivas\ConsultasController@homeConsultasDirectivas')->name('consultas-directivas');