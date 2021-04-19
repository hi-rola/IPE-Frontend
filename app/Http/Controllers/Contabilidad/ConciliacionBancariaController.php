<?php

namespace App\Http\Controllers\Contabilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Contabilidad;
use App\Http\Controllers\Controller;

class ConciliacionBancariaController extends Controller
{
    //
    public function IPE()
    {
        return view('pages.Contabilidad.Conciliacion-bancaria.IPE');
    }

    public function bancos()
    {
        return view('pages.Contabilidad.Conciliacion-bancaria.bancos');
    }

    public function consultaDeCheques()
    {
        return view('pages.Contabilidad.Conciliacion-bancaria.consulta-de-cheques');
    }

    public function consultaDeChequesHistorico()
    {
        return view('pages.Contabilidad.Conciliacion-bancaria.consulta-de-cheques-historico');
    }

    public function conciliacion()
    {
        return view('pages.Contabilidad.Conciliacion-bancaria.conciliacion');
    }

    public function imprimeReporte()
    {
        return view('pages.Contabilidad.Conciliacion-bancaria.imprime-reporte');
    }
}
