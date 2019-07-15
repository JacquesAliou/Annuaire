<?php

use App\Acteur;
use App\User;
use Illuminate\Database\Seeder;


class ActeurTableSeeder extends Seeder
{
    public function run()
    {
        $acteur = factory(Acteur::class, 30)->create();
        User::All()->each(function ($user) use ($acteur){
            $user->$acteur()->saveMany($acteur);
        });
    }

}