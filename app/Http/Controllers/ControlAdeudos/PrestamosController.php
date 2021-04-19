<?php

namespace App\Http\Controllers\ControlAdeudos;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlAdeudos;
use App\Http\Controllers\Controller;

class PrestamosController extends Controller
{
    //
    public function homeControlAdeudos()
    {
        return view('pages.ControlAdeudos.home-control-adeudos');
    }

    public function archivoDeRangos()
    {
        return view('pages.ControlAdeudos.Prestamos.archivo-de-rangos');
    }

    public function actualizacionDeClaves()
    {
        return view('pages.ControlAdeudos.Prestamos.actualizacion-de-claves');
    }

    public function movimientoDeAdeudos()
    {
        return view('pages.ControlAdeudos.Prestamos.movimiento-de-adeudos');
    }

    public function bonificaciones()
    {
        return view('pages.ControlAdeudos.Prestamos.bonificaciones');
    }

    public function tabulado()
    {
        return view('pages.ControlAdeudos.Prestamos.tabulado');
    }

    public function relacionIncobrables()
    {
        return view('pages.ControlAdeudos.Prestamos.relacion-incobrables');
    }

    public function conciliacionIncobrablesPA()
    {
        return view('pages.ControlAdeudos.Prestamos.conciliacion-incobrables-vs-plazas-activas');
    }
}
