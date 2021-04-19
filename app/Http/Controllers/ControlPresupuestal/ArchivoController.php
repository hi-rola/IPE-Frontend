<?php

namespace App\Http\Controllers\ControlPresupuestal;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlPresupuestal;
use App\Http\Controllers\Controller;

class ArchivoController extends Controller
{
    //
    public function mofificarPresupuestos()
    {
        return view('pages.ControlPresupuestal.Archivo.modificar-presupuestos');
    }

    public function pagados()
    {
        return view('pages.ControlPresupuestal.Archivo.Movimientos.pagados');
    }

    public function ejercidos()
    {
        return view('pages.ControlPresupuestal.Archivo.Movimientos.ejercidos');
    }

    public function devengados()
    {
        return view('pages.ControlPresupuestal.Archivo.Movimientos.devengados');
    }

    public function compromisos()
    {
        return view('pages.ControlPresupuestal.Archivo.Movimientos.compromisos');
    }

    public function transferencias()
    {
        return view('pages.ControlPresupuestal.Archivo.Movimientos.transferencias');
    }

    public function transferenciasAutomaticas()
    {
        return view('pages.ControlPresupuestal.Archivo.Movimientos.transferencias-automaticas');
    }

    public function distribuciones()
    {
        return view('pages.ControlPresupuestal.Archivo.Movimientos.distribuciones');
    }

    public function nominaIPE()
    {
        return view('pages.ControlPresupuestal.Archivo.Movimientos.nomina-IPE');
    }

    public function nominaIPEDisco()
    {
        return view('pages.ControlPresupuestal.Archivo.Movimientos.nomina-IPE-disco');
    }

    public function cancelacionesPagados()
    {
        return view('pages.ControlPresupuestal.Archivo.Cancelaciones.pagados');
    }

    public function cancelacionesEjercidos()
    {
        return view('pages.ControlPresupuestal.Archivo.Cancelaciones.ejercidos');
    }

    public function cancelacionesCompromisos()
    {
        return view('pages.ControlPresupuestal.Archivo.Cancelaciones.compromisos');
    }

    public function afectacionesLiquidas()
    {
        return view('pages.ControlPresupuestal.Archivo.afectaciones-liquidas');
    }

    public function reduccionesColectivas()
    {
        return view('pages.ControlPresupuestal.Archivo.reducciones-colectivas');
    }

    public function reduccionesCapituo1000()
    {
        return view('pages.ControlPresupuestal.Archivo.reducciones-capituo-1000');
    }

}
