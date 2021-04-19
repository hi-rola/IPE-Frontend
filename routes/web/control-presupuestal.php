<?php

use Illuminate\Support\Facades\Route;

// control presupuestal / archivo
Route::get('/control-presupuestal', 'ControlPresupuestal\ControlPresupuestalController@homeControlPresupuestal')->name('control-presupuestal');

Route::get('/control-presupuestal/modificar-presupuestos', 'ControlPresupuestal\ArchivoController@mofificarPresupuestos')->name('control-presupuestal/modificar-presupuestos');
Route::get('/control-presupuestal/movimientos-pagados', 'ControlPresupuestal\ArchivoController@pagados')->name('control-presupuestal/movimientos-pagados');
Route::get('/control-presupuestal/movimientos-ejercidos', 'ControlPresupuestal\ArchivoController@ejercidos')->name('control-presupuestal/movimientos-ejercidos');
Route::get('/control-presupuestal/movimientos-devengados', 'ControlPresupuestal\ArchivoController@devengados')->name('control-presupuestal/movimientos-devengados');
Route::get('/control-presupuestal/movimientos-compromisos', 'ControlPresupuestal\ArchivoController@compromisos')->name('control-presupuestal/movimientos-compromisos');
Route::get('/control-presupuestal/movimientos-transferencias', 'ControlPresupuestal\ArchivoController@transferencias')->name('control-presupuestal/movimientos-transferencias');
Route::get('/control-presupuestal/movimientos-transferencias-automaticas', 'ControlPresupuestal\ArchivoController@transferenciasAutomaticas')->name('control-presupuestal/movimientos-transferencias-automaticas');
Route::get('/control-presupuestal/movimientos-distribuciones', 'ControlPresupuestal\ArchivoController@distribuciones')->name('control-presupuestal/movimientos-distribuciones');
Route::get('/control-presupuestal/movimientos-nomina-IPE', 'ControlPresupuestal\ArchivoController@nominaIPE')->name('control-presupuestal/movimientos-nomina-IPE');
Route::get('/control-presupuestal/movimientos-nomina-IPE-disco', 'ControlPresupuestal\ArchivoController@nominaIPEDisco')->name('control-presupuestal/movimientos-nomina-IPE-disco');
Route::get('/control-presupuestal/cancelaciones-pagados', 'ControlPresupuestal\ArchivoController@cancelacionesPagados')->name('control-presupuestal/cancelaciones-pagados');
Route::get('/control-presupuestal/cancelaciones-ejercidos', 'ControlPresupuestal\ArchivoController@cancelacionesEjercidos')->name('control-presupuestal/cancelaciones-ejercidos');
Route::get('/control-presupuestal/cancelaciones-compromisos', 'ControlPresupuestal\ArchivoController@cancelacionesCompromisos')->name('control-presupuestal/cancelaciones-compromisos');
Route::get('/control-presupuestal/afectaciones-liquidas', 'ControlPresupuestal\ArchivoController@afectacionesLiquidas')->name('control-presupuestal/afectaciones-liquidas');
Route::get('/control-presupuestal/reducciones-colectivas', 'ControlPresupuestal\ArchivoController@reduccionesColectivas')->name('control-presupuestal/reducciones-colectivas');
Route::get('/control-presupuestal/reducciones-capituo-1000', 'ControlPresupuestal\ArchivoController@reduccionesCapituo1000')->name('control-presupuestal/reducciones-capituo-1000');

// control presupuestal / centros de trabajo 
Route::get('/control-presupuestal/centros-de-trabajo-solicitado', 'ControlPresupuestal\CentrosTrabajoController@solicitado')->name('control-presupuestal/centros-de-trabajo-solicitado');
Route::get('/control-presupuestal/centros-de-trabajo-ejercidos', 'ControlPresupuestal\CentrosTrabajoController@ejercidos')->name('control-presupuestal/centros-de-trabajo-ejercidos');
Route::get('/control-presupuestal/centros-de-trabajo-compromisos', 'ControlPresupuestal\CentrosTrabajoController@compromisos')->name('control-presupuestal/centros-de-trabajo-compromisos')->middleware('login');
Route::get('/control-presupuestal/centros-de-trabajo-transferencias', 'ControlPresupuestal\CentrosTrabajoController@transferencias')->name('control-presupuestal/centros-de-trabajo-transferencias');
Route::get('/control-presupuestal/centros-de-trabajo-solvencia', 'ControlPresupuestal\CentrosTrabajoController@solvencia')->name('control-presupuestal/centros-de-trabajo-solvencia');
Route::get('/control-presupuestal/centros-de-trabajo-presupuesto-modificado', 'ControlPresupuestal\CentrosTrabajoController@presupuestoModificado')->name('control-presupuestal/centros-de-trabajo-presupuesto-modificado');

// control presupuestal / consultas
Route::get('/control-presupuestal/consultas-validacion-tipos-movimiento', 'ControlPresupuestal\ConsultasController@validacionTiposMovimiento')->name('control-presupuestal/consultas-validacion-tipos-movimiento');
Route::get('/control-presupuestal/consultas-conciliacion-con-contabilidad', 'ControlPresupuestal\ConsultasController@conciliacionContabilidad')->name('control-presupuestal/consultas-conciliacion-con-contabilidad');
Route::get('/control-presupuestal/consultas-tipos-de-presupuestos', 'ControlPresupuestal\ConsultasController@tiposPresupuestos')->name('control-presupuestal/consultas-tipos-de-presupuestos');
Route::get('/control-presupuestal/consultas-comparativo', 'ControlPresupuestal\ConsultasController@comparativo')->name('control-presupuestal/consultas-comparativo');
Route::get('/control-presupuestal/consultas-sbc', 'ControlPresupuestal\ConsultasController@sbc')->name('control-presupuestal/consultas-sbc');
Route::get('/control-presupuestal/consultas-formato-REPTRIM', 'ControlPresupuestal\ConsultasController@formatoREPTRIM')->name('control-presupuestal/consultas-formato-REPTRIM');
Route::get('/control-presupuestal/consultas-formato-REPTRIM', 'ControlPresupuestal\ConsultasController@formatoREPTRIM')->name('control-presupuestal/consultas-formato-REPTRIM');
Route::get('/control-presupuestal/consultas-formato-REPTRIM', 'ControlPresupuestal\ConsultasController@formatoREPTRIM')->name('control-presupuestal/consultas-formato-REPTRIM');
Route::get('/control-presupuestal/consultas-reportes-armonizacion-contable', 'ControlPresupuestal\ConsultasController@reportesArmonizacionContable')->name('control-presupuestal/consultas-reportes-armonizacion-contable');
Route::get('/control-presupuestal/consultas-reporte-cancelaciones', 'ControlPresupuestal\ConsultasController@reporteCancelaciones')->name('control-presupuestal/consultas-reporte-cancelaciones');
Route::get('/control-presupuestal/consultas-proyecciones', 'ControlPresupuestal\ConsultasController@proyecciones')->name('control-presupuestal/consultas-proyecciones');

// control presupuestal / consultas / Solvencia
Route::get('/control-presupuestal/consultas-solvencia-neta', 'ControlPresupuestal\ConsultasController@neta')->name('control-presupuestal/consultas-solvencia-neta');
Route::get('/control-presupuestal/consultas-solvencia-por-grupos', 'ControlPresupuestal\ConsultasController@porGrupos')->name('control-presupuestal/consultas-solvencia-por-grupos');
Route::get('/control-presupuestal/consultas-solvencia-acumulada', 'ControlPresupuestal\ConsultasController@acumulada')->name('control-presupuestal/consultas-solvencia-acumulada');
Route::get('/control-presupuestal/consultas-solvencia-cifras-de-control', 'ControlPresupuestal\ConsultasController@cifrasControl')->name('control-presupuestal/consultas-solvencia-cifras-de-control');

// control presupuestal / consultas / Estado-ejercicio-presupuesto
Route::get('/control-presupuestal/consultas-estado-ejercicio-presupuesto-parte-1', 'ControlPresupuestal\ConsultasController@parte1')->name('control-presupuestal/consultas-estado-ejercicio-presupuesto-parte-1');
Route::get('/control-presupuestal/consultas-estado-ejercicio-presupuesto-parte-2', 'ControlPresupuestal\ConsultasController@parte2')->name('control-presupuestal/consultas-estado-ejercicio-presupuesto-parte-2');

// control presupuestal / mantenimiento
Route::get('/control-presupuestal/matenimiento-cambiar-anio-presupuestal', 'ControlPresupuestal\MantenimientoController@cambiarAnioPresupuestal')->name('control-presupuestal/matenimiento-cambiar-anio-presupuestal');
Route::get('/control-presupuestal/matenimiento-folios', 'ControlPresupuestal\MantenimientoController@folios')->name('control-presupuestal/matenimiento-folios');
Route::get('/control-presupuestal/matenimiento-crear-presupuestos', 'ControlPresupuestal\MantenimientoController@crearPresupuestos')->name('control-presupuestal/matenimiento-crear-presupuestos');
Route::get('/control-presupuestal/matenimiento-borrar-presupuestos', 'ControlPresupuestal\MantenimientoController@borrarPresupuestos')->name('control-presupuestal/matenimiento-borrar-presupuestos');
Route::get('/control-presupuestal/matenimiento-inicial-a-autorizado', 'ControlPresupuestal\MantenimientoController@inicialAutorizado')->name('control-presupuestal/matenimiento-inicial-a-autorizado');
