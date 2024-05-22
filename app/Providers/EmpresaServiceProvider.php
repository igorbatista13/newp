<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\MinhaEmpresa;

class EmpresaServiceProvider extends ServiceProvider
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
        // Compartilhar $empresa com todas as views
        View::composer('*', function ($view) {
            $empresa = MinhaEmpresa::all();
            $view->with('empresa', $empresa);
        });
    }
}
