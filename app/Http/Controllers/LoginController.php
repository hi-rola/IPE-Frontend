<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\Boolean;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class LoginController extends Controller
{
    public function home2()
    {
        /* $respuesta = Http::get('https://mastercapital.app/ws/call.php?service=getAllUsuario&idContexto=1901');
        $users = $respuesta->json(); */

        return view('pages.index');
    }

    public function login()
    {
        return view('pages.login');
    }


    public function validarLogin(Request $request)
    {
        $request->validate([
            'usuario' => 'required',
            'contrasena' => 'required'
        ]);

        $usuario = $request->usuario;
        $contrasena = $request->contrasena;
        $user = Http::get('http://omnius.com.mx/ipe/ws/login.php?username=' . $usuario . '&contrasena=' . $contrasena);

        $validacion = $this->validarCredenciales($usuario, $contrasena, $user);

        if ($validacion === true) {
            $userRol = $user['Sistema'];
            if ($userRol == 5) {
                $sesionUsuario = $user['Nombre'];
                session()->put('Ipekey', $sesionUsuario);
                return redirect()->route('homeContabilidad');
            } else if ($userRol == 3) {
                $sesionUsuario = $user['Nombre'];
                session()->put('Ipekey', $sesionUsuario);
                return redirect()->route('control-presupuestal');
            } else if ($userRol == 9) {
                $sesionUsuario = $user['Nombre'];
                session()->put('Ipekey', $sesionUsuario);
                return redirect()->route('control-de-adeudos');
            } else if ($userRol == 15) {
                $sesionUsuario = $user['Nombre'];
                session()->put('Ipekey', $sesionUsuario);
                return redirect()->route('consultas-directivas');
            } else if ($userRol !== 5 ||  $userRol !== 3 || $userRol !== 9 || $userRol !== 15) {
                return Redirect::back()->with('mensaje_sesion', 'Error de acceso a sistema');
            }
        } else if ($validacion === false) {
            return Redirect::back()->with('mensaje_sesion', 'Usuario y/o contraseña no válidos');
        }
    }

    private function validarCredenciales($usuario, $contrasena, $user): bool
    {
        try {
            if ($user['Login_Name'] === $usuario && $user['x_Contrasena'] === $contrasena) {
                return true;
            } else if ($user === false) {
                return false;
            }
        } catch (Throwable $t) {
            return false;
        }
        return true;
    }
}
