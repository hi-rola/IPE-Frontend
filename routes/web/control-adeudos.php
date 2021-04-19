<?php

use Illuminate\Support\Facades\Route;

// rutas control de adeudos / prestamos
Route::get('/control-de-adeudos', 'ControlAdeudos\PrestamosController@homeControlAdeudos')->name('control-de-adeudos');
Route::get('/control-de-adeudos/prestamos-archivo-de-rangos', 'ControlAdeudos\PrestamosController@archivoDeRangos')->name('control-de-adeudos/prestamos-archivo-de-rangos');
Route::get('/control-de-adeudos/prestamos-actualizacion-de-claves', 'ControlAdeudos\PrestamosController@actualizacionDeClaves')->name('control-de-adeudos/prestamos-actualizacion-de-claves');
Route::get('/control-de-adeudos/prestamos-movimiento-de-adeudos', 'ControlAdeudos\PrestamosController@movimientoDeAdeudos')->name('control-de-adeudos/prestamos-movimiento-de-adeudos')->middleware('login');
Route::get('/control-de-adeudos/prestamos-bonificaciones', 'ControlAdeudos\PrestamosController@bonificaciones')->name('control-de-adeudos/prestamos-bonificaciones');
Route::get('/control-de-adeudos/prestamos-tabulado', 'ControlAdeudos\PrestamosController@tabulado')->name('control-de-adeudos/prestamos-tabulado');
Route::get('/control-de-adeudos/prestamos-relacion-incobrables', 'ControlAdeudos\PrestamosController@relacionIncobrables')->name('control-de-adeudos/prestamos-relacion-incobrables');
Route::get('/control-de-adeudos/prestamos-conciliacion-incobrables-vs-plazas-activas', 'ControlAdeudos\PrestamosController@conciliacionIncobrablesPA')->name('control-de-adeudos/prestamos-conciliacion-incobrables-vs-plazas-activas');

Route::get('/control-de-adeudos/prestamos-elegir-fecha-de-corte', 'ControlAdeudos\ElegirFechaController@elegirFechaCorte')->name('control-de-adeudos/prestamos-elegir-fecha-de-corte');
Route::get('/control-de-adeudos/prestamos-fecha-de-corte-emergentes', 'ControlAdeudos\ElegirFechaController@elegirFechaCorteEmergentes')->name('control-de-adeudos/prestamos-fecha-de-corte-emergentes');
Route::get('/control-de-adeudos/prestamos-elegir-fecha-de-corte-mediano', 'ControlAdeudos\ElegirFechaController@elegirFechaCorteMediano')->name('control-de-adeudos/prestamos-elegir-fecha-de-corte-mediano');
Route::get('/control-de-adeudos/prestamos-elegir-fecha-corte-PCP-domiciliado', 'ControlAdeudos\ElegirFechaController@elegirFechaCortePCPDomiciliado')->name('control-de-adeudos/prestamos-elegir-fecha-corte-PCP-domiciliado');
Route::get('/control-de-adeudos/prestamos-elegir-de-fecha-corte-mediano-domiciliado', 'ControlAdeudos\ElegirFechaController@elegirFechaCorteMedianoDomiciliado')->name('control-de-adeudos/prestamos-elegir-de-fecha-corte-mediano-domiciliado');

// rutas control de adeudos / organismos
Route::get('/control-de-adeudos/organismos-catalogos-conceptos', 'ControlAdeudos\OrganismosController@conceptos')->name('control-de-adeudos/organismos-catalogos-conceptos');
Route::get('/control-de-adeudos/organismos-catalogos-organismos', 'ControlAdeudos\OrganismosController@organismos')->name('control-de-adeudos/organismos-catalogos-organismos');
Route::get('/control-de-adeudos/organismos-estimaciones-inicializacion', 'ControlAdeudos\OrganismosController@inicializacion')->name('control-de-adeudos/organismos-estimaciones-inicializacion');
Route::get('/control-de-adeudos/organismos-estimaciones-mantenimiento', 'ControlAdeudos\OrganismosController@mantenimiento')->name('control-de-adeudos/organismos-estimaciones-mantenimiento');
Route::get('/control-de-adeudos/organismos-estimaciones-modificacion', 'ControlAdeudos\OrganismosController@modificacion')->name('control-de-adeudos/organismos-estimaciones-modificacion');
Route::get('/control-de-adeudos/organismos-estimaciones-descuentos', 'ControlAdeudos\OrganismosController@descuentos')->name('control-de-adeudos/organismos-estimaciones-descuentos');
Route::get('/control-de-adeudos/organismos-estimaciones-poliza', 'ControlAdeudos\OrganismosController@poliza')->name('control-de-adeudos/organismos-estimaciones-poliza');
Route::get('/control-de-adeudos/organismos-estimaciones-listado', 'ControlAdeudos\OrganismosController@listado')->name('control-de-adeudos/organismos-estimaciones-listado');
Route::get('/control-de-adeudos/organismos-estimaciones-emision', 'ControlAdeudos\OrganismosController@emision')->name('control-de-adeudos/organismos-estimaciones-emision');
Route::get('/control-de-adeudos/organismos-respaldar', 'ControlAdeudos\OrganismosController@respaldar')->name('control-de-adeudos/organismos-respaldar');
Route::get('/control-de-adeudos/organismos-restaurar', 'ControlAdeudos\OrganismosController@restaurar')->name('control-de-adeudos/organismos-restaurar');
Route::get('/control-de-adeudos/organismos-respaldar-quincenas-adelantadas', 'ControlAdeudos\OrganismosController@respaldarQuincenasAdelantadas')->name('control-de-adeudos/organismos-respaldar-quincenas-adelantadas');
