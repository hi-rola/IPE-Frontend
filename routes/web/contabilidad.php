<?php

use Illuminate\Support\Facades\Route;

// rutas contabilidad
Route::get('/contabilidad', 'Contabilidad\ArchivoController@homeContabilidad')->name('homeContabilidad');

Route::get('/contabilidad/numeros-poliza', 'Contabilidad\ArchivoController@numeroPoliza')->name('contabilidad/numeros-poliza');
Route::get('/contabilidad/control-de-mes', 'Contabilidad\ArchivoController@controlDeMes')->name('contabilidad/control-de-mes');
Route::get('/contabilidad/generar-o-anular-excedente', 'Contabilidad\ArchivoController@generarAnularExcedente')->name('contabilidad/generar-o-anular-excedente');
Route::get('/contabilidad/ingresos-presupuestados', 'Contabilidad\ArchivoController@ingresosPresupuestados')->name('contabilidad/ingresos-presupuestados');
Route::get('/contabilidad/cambia-periodo', 'Contabilidad\ArchivoController@cambiaPeriodo')->name('contabilidad/cambia-periodo');
Route::get('/contabilidad/recibo-de-adeudo', 'Contabilidad\ArchivoController@reciboAdeudo')->name('contabilidad/recibo-de-adeudo');
Route::get('/contabilidad/elimina-cuentas-y-actualiza', 'Contabilidad\ArchivoController@eliminaCuentasActualiza')->name('contabilidad/elimina-cuentas-y-actualiza');
Route::get('/contabilidad/incorpora-archvio-de-excel', 'Contabilidad\ArchivoController@incorporaArchivoExcel')->name('contabilidad/incorpora-archvio-de-excel');

Route::get('/contabilidad/catalogos-cuentas', 'Contabilidad\CatalogoController@cuentas')->name('contabilidad/catalogos-cuentas');
Route::get('/contabilidad/catalogos-grupos-para-epf', 'Contabilidad\CatalogoController@gruposParaEPF')->name('contabilidad/catalogos-grupos-para-epf');
Route::get('/contabilidad/catalogos-cuentas-para-epf', 'Contabilidad\CatalogoController@cuentasParaEPF')->name('contabilidad/catalogos-cuentas-para-epf');
Route::get('/contabilidad/catalogos-grupos-para-er', 'Contabilidad\CatalogoController@gruposParaER')->name('contabilidad/catalogos-grupos-para-er');
Route::get('/contabilidad/catalogos-cuentas-para-er', 'Contabilidad\CatalogoController@cuentasParaER')->name('contabilidad/catalogos-cuentas-para-er');
Route::get('/contabilidad/catalogos-grupos-de-balanzas', 'Contabilidad\CatalogoController@grupoDeBalanzas')->name('contabilidad/catalogos-grupos-de-balanzas');
Route::get('/contabilidad/catalogo-estado-de-variaciones', 'Contabilidad\CatalogoController@catalogoEstadoVariaciones')->name('contabilidad/catalogo-estado-de-variaciones');

Route::get('/contabilidad/poliza-captura', 'Contabilidad\PolizaController@captura')->name('contabilidad/poliza-captura');
Route::get('/contabilidad/poliza-emergente', 'Contabilidad\PolizaController@polizaEmergente')->name('contabilidad/poliza-emergente');
Route::get('/contabilidad/poliza-mediano-plazo', 'Contabilidad\PolizaController@polizaMedianoPlazo')->name('contabilidad/poliza-mediano-plazo');
Route::get('/contabilidad/poliza-automaticas', 'Contabilidad\PolizaController@automaticas')->name('contabilidad/poliza-automaticas');
Route::get('/contabilidad/poliza-listado-polizas', 'Contabilidad\PolizaController@listadoPolizas')->name('contabilidad/poliza-listado-polizas');
Route::get('/contabilidad/poliza-actualizacion', 'Contabilidad\PolizaController@actualizacion')->name('contabilidad/poliza-actualizacion');
Route::get('/contabilidad/poliza-desactualizacion', 'Contabilidad\PolizaController@desactualizacion')->name('contabilidad/poliza-desactualizacion');

Route::get('/contabilidad/reportes-balanza', 'Contabilidad\ReportesController@balanza')->name('contabilidad/reportes-balanza');
Route::get('/contabilidad/reportes-analisis-de-cuentas', 'Contabilidad\ReportesController@analisisCuenta')->name('contabilidad/reportes-analisis-de-cuentas');
Route::get('/contabilidad/reportes-mayor', 'Contabilidad\ReportesController@mayor')->name('contabilidad/reportes-mayor');
Route::get('/contabilidad/reportes-estado-de-cuenta', 'Contabilidad\ReportesController@estadoCuenta')->name('contabilidad/reportes-estado-de-cuenta');
Route::get('/contabilidad/reportes-estado-de-posicion-financiera', 'Contabilidad\ReportesController@estadoPosicionFinanciera')->name('contabilidad/reportes-estado-de-posicion-financiera');
Route::get('/contabilidad/reportes-cuentas-colectivas', 'Contabilidad\ReportesController@cuentasColectivas')->name('contabilidad/reportes-cuentas-colectivas');
Route::get('/contabilidad/reportes-notificaciones-de-pago', 'Contabilidad\ReportesController@notificacionesPago')->name('contabilidad/reportes-notificaciones-de-pago');
Route::get('/contabilidad/reportes-individual-pensionados', 'Contabilidad\ReportesController@individualPensionados')->name('contabilidad/reportes-individual-pensionados');
Route::get('/contabilidad/reportes-individual-activos', 'Contabilidad\ReportesController@individualActivos')->name('contabilidad/reportes-individual-activos');
Route::get('/contabilidad/reportes-balanza-armonizada', 'Contabilidad\ReportesController@balanzaArmonizada')->name('contabilidad/reportes-balanza-armonizada');
Route::get('/contabilidad/reportes-estado-de-variaciones', 'Contabilidad\ReportesController@estadoVariaciones')->name('contabilidad/reportes-estado-de-variaciones');
Route::get('/contabilidad/reportes-grupos-cuentas-balanzas', 'Contabilidad\ReportesController@gruposCuentasBalanzas')->name('contabilidad/reportes-grupos-cuentas-balanzas');
Route::get('/contabilidad/reportes-consulta-renovaciones-prestamos', 'Contabilidad\ReportesController@consultaRenovacionesPrestamos')->name('contabilidad/reportes-consulta-renovaciones-prestamos');
Route::get('/contabilidad/reportes-cuentas-de-mes', 'Contabilidad\ReportesController@cuentasDeMes')->name('contabilidad/reportes-cuentas-de-mes');
Route::get('/contabilidad/reportes-libro-diario', 'Contabilidad\ReportesController@libroDiario')->name('contabilidad/reportes-libro-diario');
Route::get('/contabilidad/reportes-estado-analisis-deuda-otros-pasivos', 'Contabilidad\ReportesController@estadoAnalisisDeudaOtrosPasivos')->name('contabilidad/reportes-estado-analisis-deuda-otros-pasivos');
Route::get('/contabilidad/reportes-consulta-pension', 'Contabilidad\ReportesController@consultaPension')->name('contabilidad/reportes-consulta-pension');
Route::get('/contabilidad/reportes-reporte-errores-en-el-cierre', 'Contabilidad\ReportesController@reporteErroresEnECierre')->name('contabilidad/reportes-reporte-errores-en-el-cierre');

Route::get('/contabilidad/armonizacion-contable-estado-posicion-financiera', 'Contabilidad\ArmonizacionContableController@estadoPosicionFinanciera')->name('contabilidad/armonizacion-contable-estado-posicion-financiera');
Route::get('/contabilidad/armonizacion-contable-estado-de-actividades', 'Contabilidad\ArmonizacionContableController@estadoActividades')->name('contabilidad/armonizacion-contable-estado-de-actividades');
Route::get('/contabilidad/armonizacion-contable-estado-de-variacion', 'Contabilidad\ArmonizacionContableController@estadoVariación')->name('contabilidad/armonizacion-contable-estado-de-variacion');
Route::get('/contabilidad/armonizacion-contable-estado-analisis-deuda-otros-pasivos', 'Contabilidad\ArmonizacionContableController@estadoAnalisisDeudaOtrosPasivos')->name('contabilidad/armonizacion-contable-estado-analisis-deuda-otros-pasivos');
Route::get('/contabilidad/armonizacion-contable-balanzas-analiticos-armonizados', 'Contabilidad\ArmonizacionContableController@balanzasAnaliticosArmonizados')->name('contabilidad/armonizacion-contable-balanzas-analiticos-armonizados');
Route::get('/contabilidad/armonizacion-contable-notas-estados-financieros', 'Contabilidad\ArmonizacionContableController@notasEstadosFinancieros')->name('contabilidad/armonizacion-contable-notas-estados-financieros');

Route::get('/contabilidad/apertura-individual', 'Contabilidad\AperturaController@aperturaInicial')->name('contabilidad/apertura-individual');
Route::get('/contabilidad/apertura-final', 'Contabilidad\AperturaController@aperturaFinal')->name('contabilidad/apertura-final');

Route::get('/contabilidad/presupuesto-actualiza-cuentas', 'Contabilidad\PresupuestoController@actualizaCuentas')->name('contabilidad/presupuesto-actualiza-cuentas');
Route::get('/contabilidad/presupuesto-gestion-presupuestal', 'Contabilidad\PresupuestoController@gestionPresupuestal')->name('contabilidad/presupuesto-gestion-presupuestal');
Route::get('/contabilidad/presupuesto-estado-de-resultados', 'Contabilidad\PresupuestoController@estadoResultados')->name('contabilidad/presupuesto-estado-de-resultados');

Route::get('/contabilidad/conciliacion-bancaria-IPE', 'Contabilidad\ConciliacionBancariaController@IPE')->name('contabilidad/conciliacion-bancaria-IPE');
Route::get('/contabilidad/conciliacion-bancaria-bancos', 'Contabilidad\ConciliacionBancariaController@bancos')->name('contabilidad/conciliacion-bancaria-bancos');
Route::get('/contabilidad/conciliacion-bancaria-consulta-de-cheques', 'Contabilidad\ConciliacionBancariaController@consultaDeCheques')->name('contabilidad/conciliacion-bancaria-consulta-de-cheques');
Route::get('/contabilidad/conciliacion-bancaria-consulta-de-cheques-historico', 'Contabilidad\ConciliacionBancariaController@consultaDeChequesHistorico')->name('contabilidad/conciliacion-bancaria-consulta-de-cheques-historico');
Route::get('/contabilidad/conciliacion-bancaria-conciliacion', 'Contabilidad\ConciliacionBancariaController@conciliacion')->name('contabilidad/conciliacion-bancaria-conciliacion');
Route::get('/contabilidad/conciliacion-bancaria-imprime-reporte', 'Contabilidad\ConciliacionBancariaController@imprimeReporte')->name('contabilidad/conciliacion-bancaria-imprime-reporte');

// rutas sistema
Route::get('/sistema/usuarios', 'Contabilidad\SistemaController@usuarios')->name('sistema/usuarios');
Route::get('/sistema/sistemas', 'Contabilidad\SistemaController@sistemas')->name('sistema/sistemas');
Route::get('/sistema/grupos', 'Contabilidad\SistemaController@grupos')->name('sistema/grupos');
