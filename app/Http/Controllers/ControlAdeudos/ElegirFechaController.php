<?php

namespace App\Http\Controllers\ControlAdeudos;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlAdeudos;
use App\Http\Controllers\Controller;

class ElegirFechaController extends Controller
{
    //
    public function elegirFechaCorte()
    {
        return view('pages.ControlAdeudos.Prestamos.Elegir-fecha.elegir-fecha-de-corte');
    }

    public function elegirFechaCorteEmergentes()
    {
        return view('pages.ControlAdeudos.Prestamos.Elegir-fecha.elegir-fecha-de-corte-emergentes');
    }

    public function elegirFechaCorteMediano()
    {
        return view('pages.ControlAdeudos.Prestamos.Elegir-fecha.elegir-fecha-de-corte-mediano');
    }

    public function elegirFechaCortePCPDomiciliado()
    {
        return view('pages.ControlAdeudos.Prestamos.Elegir-fecha.elegir-fecha-de-corte-PCP-domiciliado');
    }

    public function elegirFechaCorteMedianoDomiciliado()
    {
        return view('pages.ControlAdeudos.Prestamos.Elegir-fecha.elegir-fecha-de-corte-mediano-domiciliado');
    }
}
