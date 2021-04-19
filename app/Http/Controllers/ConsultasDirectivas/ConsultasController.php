<?php

namespace App\Http\Controllers\ConsultasDirectivas;

use Illuminate\Http\Request;
use App\Http\Controllers\ConsultasDirectivas;
use App\Http\Controllers\Controller;

class ConsultasController extends Controller
{
    //
    public function homeConsultasDirectivas()
    {
        return view('pages.ConsultasDirectivas.home-consultas-directivas');
    }
}
