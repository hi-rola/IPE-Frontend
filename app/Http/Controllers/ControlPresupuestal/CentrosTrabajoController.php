<?php

namespace App\Http\Controllers\ControlPresupuestal;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlPresupuestal;
use App\Http\Controllers\Controller;

class CentrosTrabajoController extends Controller
{
    //
    public function solicitado()
    {
        return view('pages.ControlPresupuestal.Centros-de-trabajo.solicitado');
    }

    public function ejercidos()
    {
        return view('pages.ControlPresupuestal.Centros-de-trabajo.ejercidos');
    }

    public function compromisos()
    {
        return view('pages.ControlPresupuestal.Centros-de-trabajo.compromisos   ');
    }

    public function transferencias()
    {
        return view('pages.ControlPresupuestal.Centros-de-trabajo.transferencias');
    }

    public function solvencia()
    {
        return view('pages.ControlPresupuestal.Centros-de-trabajo.solvencia');
    }

    public function presupuestoModificado()
    {
        return view('pages.ControlPresupuestal.Centros-de-trabajo.presupuesto-modificado');
    }
}
