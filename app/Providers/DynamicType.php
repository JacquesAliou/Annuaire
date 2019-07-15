<?php

namespace App\Providers;

use App\Type;
use Illuminate\Support\ServiceProvider;

class DynamicType extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('type_array',Type::all());
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
