<?php

namespace App\Http\Controllers\Contabilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Contabilidad;
use App\Http\Controllers\Controller;


class ArmonizacionContableController extends Controller
{
    //
    public function estadoPosicionFinanciera()
    {
        return view('pages.Contabilidad.Armonizacion-contable.estado-posicion-financiera');
    }

    public function estadoActividades()
    {
        return view('pages.Contabilidad.Armonizacion-contable.estado-de-actividades');
    }

    public function estadoVariación()
    {
        return view('pages.Contabilidad.Armonizacion-contable.estado-de-variacion');
    }

    public function estadoAnalisisDeudaOtrosPasivos()
    {
        return view('pages.Contabilidad.Armonizacion-contable.estado-analisis-deuda-otros-pasivos');
    }

    public function balanzasAnaliticosArmonizados()
    {
        return view('pages.Contabilidad.Armonizacion-contable.balanzas-analiticos-armonizados');
    }

    public function notasEstadosFinancieros()
    {
        return view('pages.Contabilidad.Armonizacion-contable.notas-estados-financieros');
    }
}
