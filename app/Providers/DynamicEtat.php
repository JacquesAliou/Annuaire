<?php

namespace App\Providers;

use App\Etat;
use Illuminate\Support\ServiceProvider;

class DynamicEtat extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('etat_array',Etat::all());
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
