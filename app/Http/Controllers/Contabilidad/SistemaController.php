<?php

namespace App\Http\Controllers\Contabilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Contabilidad;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class SistemaController extends Controller
{
    //
    public function usuarios()
    {
        //lista para menu tipo de contratación
        $respuesta = Http::get('http://omnius.com.mx/ipe/ws/Catalogos.php?idCategoria=1');
        $listaTipoContratacion = $respuesta->json();

        //lista para menu tipo de grupo
        $respuesta = Http::get('http://omnius.com.mx/ipe/ws/Listas.php?id=1');
        $listaGrupo = $respuesta->json();

        //lista para menu tipo de sistema
        $respuesta = Http::get('http://omnius.com.mx/ipe/ws/Listas.php?id=2');
        $listaSistema = $respuesta->json();

        return view('pages.Contabilidad.Sistema.usuarios', compact('listaTipoContratacion', 'listaGrupo', 'listaSistema'));
    }

    //
    public function grupos()
    {
        return view('pages.Contabilidad.Sistema.grupos');
    }

    public function sistemas()
    {
        return view('pages.Contabilidad.Sistema.sistemas');
    }
}
