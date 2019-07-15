<?php
use App\Meteo;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Meteo::class, function (Faker $faker) {

    return [
        'code_meteo' =>$faker->text(20),
    ];
});