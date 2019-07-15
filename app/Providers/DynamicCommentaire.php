<?php

namespace App\Providers;

use App\Commentaire;
use Illuminate\Support\ServiceProvider;

class DynamicCommentaire extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('commentaire_array',Commentaire::all());
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
