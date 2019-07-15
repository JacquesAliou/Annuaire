<?php


use App\Acteur;
use App\Projet;
use App\Role;
use App\User;
use Faker\Generator as Faker;


$factory->define(Acteur::class, function (Faker $faker) {

    $user = User::all()->pluck('login')->toArray();
    $role = Role::all()->pluck('id')->toArray();
    $projet = Projet::all()->pluck('id')->toArray();



    return [
        'user_login'=>$faker->randomElement($user),
        'role_id'=>$faker->randomElement($role),
        'projet_id'=>$faker->randomElement($projet),
    ];
});