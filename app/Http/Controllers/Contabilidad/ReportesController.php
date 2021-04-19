<?php

namespace App\Http\Controllers\Contabilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Contabilidad;
use App\Http\Controllers\Controller;

class ReportesController extends Controller
{
    //
    public function balanza()
    {
        return view('pages.Contabilidad.Reportes.balanza');
    }

    public function analisisCuenta()
    {
        return view('pages.Contabilidad.Reportes.analisis-cuenta');
    }

    public function mayor()
    {
        return view('pages.Contabilidad.Reportes.mayor');
    }

    public function estadoCuenta()
    {
        return view('pages.Contabilidad.Reportes.estado-cuenta');
    }

    public function estadoPosicionFinanciera()
    {
        return view('pages.Contabilidad.Reportes.estado-posicion-financiera');
    }

    public function cuentasColectivas()
    {
        return view('pages.Contabilidad.Reportes.cuentas-colectivas');
    }

    public function notificacionesPago()
    {
        return view('pages.Contabilidad.Reportes.notificaciones-pago');
    }

    public function individualPensionados()
    {
        return view('pages.Contabilidad.Reportes.individual-pensionados');
    }

    public function individualActivos()
    {
        return view('pages.Contabilidad.Reportes.individual-activos');
    }

    public function balanzaArmonizada()
    {
        return view('pages.Contabilidad.Reportes.balanza-armonizada');
    }

    public function estadoVariaciones()
    {
        return view('pages.Contabilidad.Reportes.estado-de-variaciones');
    }


    public function gruposCuentasBalanzas()
    {
        return view('pages.Contabilidad.Reportes.grupos-cuentas-balanzas');
    }

    public function consultaRenovacionesPrestamos()
    {
        return view('pages.Contabilidad.Reportes.consulta-renovaciones-prestamos');
    }

    public function cuentasDeMes()
    {
        return view('pages.Contabilidad.Reportes.cuentas-de-mes');
    }

    public function libroDiario()
    {
        return view('pages.Contabilidad.Reportes.libro-diario');
    }

    public function estadoAnalisisDeudaOtrosPasivos()
    {
        return view('pages.Contabilidad.Reportes.estado-analisis-deuda-otros-pasivos');
    }

    public function consultaPension()
    {
        return view('pages.Contabilidad.Reportes.consulta-pension');
    }

    public function reporteErroresEnECierre()
    {
        return view('pages.Contabilidad.Reportes.reporte-errores-en-el-cierre');
    }
}
