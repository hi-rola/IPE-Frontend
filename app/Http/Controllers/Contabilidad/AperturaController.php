<?php

namespace App\Http\Controllers\Contabilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Contabilidad;
use App\Http\Controllers\Controller;

class AperturaController extends Controller
{
    //
    public function aperturaInicial()
    {
        return view('pages.Contabilidad.Apertura.apertura-inicial');
    }

    public function aperturaFinal()
    {
        return view('pages.Contabilidad.Apertura.apertura-final');
    }
}
