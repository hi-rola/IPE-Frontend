<?php

namespace App\Http\Controllers\Contabilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Contabilidad;
use App\Http\Controllers\Controller;

class ArchivoController extends Controller
{
    //

    public function homeContabilidad()
    {
        return view('pages.Contabilidad.home-contabilidad');
    }

    public function numeroPoliza()
    {
        return view('pages.Contabilidad.Archivo.numero-poliza');
    }

    public function controlDeMes()
    {
        return view('pages.Contabilidad.Archivo.control-de-mes');
    }
    
    public function generarAnularExcedente()
    {
        return view('pages.Contabilidad.Archivo.generar-o-anular-excedente');
    }

    public function ingresosPresupuestados()
    {
        return view('pages.Contabilidad.Archivo.ingresos-presupuestados');
    }

    public function cambiaPeriodo()
    {
        return view('pages.Contabilidad.Archivo.cambia-periodo');
    }
    

    public function reciboAdeudo()
    {
        return view('pages.Contabilidad.Archivo.recibo-de-adeudo');
    }
    
    public function eliminaCuentasActualiza()
    {
        return view('pages.Contabilidad.Archivo.elimina-cuentas-y-actualiza');
    }

    public function incorporaArchivoExcel()
    {
        return view('pages.Contabilidad.Archivo.incorpora-archivo-de-excel');
    }

}
