<?php

namespace App\Http\Controllers\Contabilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Contabilidad;
use App\Http\Controllers\Controller;

class PresupuestoController extends Controller
{
    //
    public function actualizaCuentas()
    {
        return view('pages.Contabilidad.Presupuesto.actualiza-cuentas');
    }

    public function gestionPresupuestal()
    {
        return view('pages.Contabilidad.Presupuesto.gestion-presupuestal');
    }

    public function estadoResultados()
    {
        return view('pages.Contabilidad.Presupuesto.estado-de-resultados');
    }
}
