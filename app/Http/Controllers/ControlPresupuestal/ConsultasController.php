<?php

namespace App\Http\Controllers\ControlPresupuestal;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlPresupuestal;
use App\Http\Controllers\Controller;

class ConsultasController extends Controller
{
    //Consultas
    public function validacionTiposMovimiento()
    {
        return view('pages.ControlPresupuestal.Consultas.validacion-tipos-movimiento');
    }

    public function conciliacionContabilidad()
    {
        return view('pages.ControlPresupuestal.Consultas.conciliacion-con-contabilidad');
    }

    public function tiposPresupuestos()
    {
        return view('pages.ControlPresupuestal.Consultas.tipos-de-presupuestos');
    }

    public function comparativo()
    {
        return view('pages.ControlPresupuestal.Consultas.comparativo');
    }

    public function sbc()
    {
        return view('pages.ControlPresupuestal.Consultas.SBC');
    }

    public function formatoREPTRIM()
    {
        return view('pages.ControlPresupuestal.Consultas.formato-REPTRIM');
    }

    public function reportesArmonizacionContable()
    {
        return view('pages.ControlPresupuestal.Consultas.reportes-armonizacion-contable');
    }

    public function reporteCancelaciones()
    {
        return view('pages.ControlPresupuestal.Consultas.reporte-cancelaciones');
    }

    public function proyecciones()
    {
        return view('pages.ControlPresupuestal.Consultas.proyecciones');
    }


    //Consultas/Solvencia
    public function neta()
    {
        return view('pages.ControlPresupuestal.Consultas.Solvencia.neta');
    }

    public function porGrupos()
    {
        return view('pages.ControlPresupuestal.Consultas.Solvencia.por-grupos');
    }

    public function acumulada()
    {
        return view('pages.ControlPresupuestal.Consultas.Solvencia.acumulada');
    }

    public function cifrasControl()
    {
        return view('pages.ControlPresupuestal.Consultas.Solvencia.cifras-de-control');
    }

    //Consultas/Estado-ejercicio-presupuesto
    public function parte1()
    {
        return view('pages.ControlPresupuestal.Consultas.Estado-ejercicio-presupuesto.parte-1');
    }

    public function parte2()
    {
        return view('pages.ControlPresupuestal.Consultas.Estado-ejercicio-presupuesto.parte-2');
    }

}
