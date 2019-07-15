<?php

namespace App\Providers;

use App\Projet;
use Illuminate\Support\ServiceProvider;

class DynamicProjet extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('projet_array',Projet::all());
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
