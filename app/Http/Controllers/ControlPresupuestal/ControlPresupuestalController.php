<?php

namespace App\Http\Controllers\ControlPresupuestal;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlPresupuestal;
use App\Http\Controllers\Controller;

class ControlPresupuestalController extends Controller
{
    //
    public function homeControlPresupuestal()
    {
        return view('pages.ControlPresupuestal.home-control-presupuestal');
    }
}
