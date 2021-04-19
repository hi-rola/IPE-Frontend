<?php

namespace App\Http\Controllers\Contabilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Contabilidad;
use App\Http\Controllers\Controller;

class CatalogoController extends Controller

{
    //
    public function cuentas()
    {
        return view('pages.Contabilidad.Catalogos.cuentas');
    }

    public function gruposParaEPF()
    {
        return view('pages.Contabilidad.Catalogos.grupos-para-EPF');
    }

    public function cuentasParaEPF()
    {
        return view('pages.Contabilidad.Catalogos.cuentas-para-EPF');
    }

    public function gruposParaER()
    {
        return view('pages.Contabilidad.Catalogos.grupos-para-ER');
    }

    public function cuentasParaER()
    {
        return view('pages.Contabilidad.Catalogos.cuentas-para-ER');
    }

    public function grupoDeBalanzas()
    {
        return view('pages.Contabilidad.Catalogos.grupo-de-balanzas');
    }

    public function catalogoEstadoVariaciones()
    {
        return view('pages.Contabilidad.Catalogos.catalogo-estado-variaciones');
    }
}
