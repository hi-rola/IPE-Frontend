<?php

namespace App\Http\Controllers\Contabilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Contabilidad;
use App\Http\Controllers\Controller;

class PolizaController extends Controller
{
    //
    public function captura()
    {
        return view('pages.Contabilidad.Poliza.captura');
    }

    public function polizaEmergente()
    {
        return view('pages.Contabilidad.Poliza.poliza-emergente');
    }

    public function polizaMedianoPlazo()
    {
        return view('pages.Contabilidad.Poliza.poliza-mediano-plazo');
    }

    public function automaticas()
    {
        return view('pages.Contabilidad.Poliza.automaticas');
    }

    public function listadoPolizas()
    {
        return view('pages.Contabilidad.Poliza.listado-polizas');
    }

    public function actualizacion()
    {
        return view('pages.Contabilidad.Poliza.actualizacion');
    }

    public function desactualizacion()
    {
        return view('pages.Contabilidad.Poliza.desactualizacion');
    }
}
