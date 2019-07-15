<?php

namespace App\Providers;


use App\Meteo;
use Illuminate\Support\ServiceProvider;

class DynamicMeteo extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('meteo_array',Meteo::all());
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
