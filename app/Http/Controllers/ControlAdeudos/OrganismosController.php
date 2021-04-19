<?php

namespace App\Http\Controllers\ControlAdeudos;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlAdeudos;
use App\Http\Controllers\Controller;

class OrganismosController extends Controller
{
    // Oraganismos/Catalogos
    public function conceptos()
    {
        return view('pages.ControlAdeudos.Organismos.Catalogos.conceptos');
    }

    public function organismos()
    {
        return view('pages.ControlAdeudos.Organismos.Catalogos.organismos');
    }

    // Oraganismos/Estimaciones
    public function inicializacion()
    {
        return view('pages.ControlAdeudos.Organismos.Estimaciones.inicializacion');
    }

    public function mantenimiento()
    {
        return view('pages.ControlAdeudos.Organismos.Estimaciones.mantenimiento');
    }

    public function modificacion()
    {
        return view('pages.ControlAdeudos.Organismos.Estimaciones.modificacion');
    }

    // Oraganismos/Estimaciones/Reportes 
    public function descuentos()
    {
        return view('pages.ControlAdeudos.Organismos.Estimaciones.Reportes.descuentos');
    }

    public function poliza()
    {
        return view('pages.ControlAdeudos.Organismos.Estimaciones.Reportes.poliza');
    }

    // Oraganismos/Estimaciones/Reportes/Recibos
    public function listado()
    {
        return view('pages.ControlAdeudos.Organismos.Estimaciones.Reportes.Recibos.listado');
    }

    public function emision()
    {
        return view('pages.ControlAdeudos.Organismos.Estimaciones.Reportes.Recibos.emision');
    }

    // Oraganismos
    public function respaldar()
    {
        return view('pages.ControlAdeudos.Organismos.respaldar');
    }

    public function restaurar()
    {
        return view('pages.ControlAdeudos.Organismos.restaurar');
    }

    public function respaldarQuincenasAdelantadas()
    {
        return view('pages.ControlAdeudos.Organismos.respaldar-quincenas-adelantadas');
    }
}
