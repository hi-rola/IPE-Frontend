<?php

namespace App\Http\Controllers\ControlPresupuestal;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlPresupuestal;
use App\Http\Controllers\Controller;

class MantenimientoController extends Controller
{
    //
    public function cambiarAnioPresupuestal()
    {
        return view('pages.ControlPresupuestal.Mantenimiento.cambiar-anio-presupuestal');
    }

    public function folios()
    {
        return view('pages.ControlPresupuestal.Mantenimiento.folios');
    }


    public function crearPresupuestos()
    {
        return view('pages.ControlPresupuestal.Mantenimiento.crear-presupuestos');
    }

    public function borrarPresupuestos()
    {
        return view('pages.ControlPresupuestal.Mantenimiento.borrar-presupuestos');
    }

    public function inicialAutorizado()
    {
        return view('pages.ControlPresupuestal.Mantenimiento.inicial-a-autorizado');
    }
}
