<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;

class DynamicUser extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('user_array',User::all());
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
