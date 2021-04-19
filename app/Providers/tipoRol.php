<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use PhpParser\Node\Stmt\Echo_;

class tipoRol extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        if (session()->has('Laravelkey')) {
            View::composer('layout.partials._header2', function ($view) {
                $result = session()->get('Laravelkey')['rol'];
                $view->with('name', 'hola');
            });
            /*  view()->composer('layout.partials._header2', function ($view) {
                $view->with('name', $result);
            }); */
        }

        /* $rolAdmin = session()->get('Laravelkey')['rol']; */
    }
}
