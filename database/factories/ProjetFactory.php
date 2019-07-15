<?php
use App\Etat;
use App\Meteo;
use App\Projet;
use App\Type;
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

$factory->define(Projet::class, function (Faker $faker) {

    $meteo = Meteo::all()->pluck('id')->toArray();
    $type =  Type::all()->pluck('id')->toArray();
    $etat =  Etat::all()->pluck('id')->toArray();

    $libelle = $faker->text(10);

    return [
        'libelle_projet'=>$libelle,
        'code_projet'   =>$faker->text(5),
        'meteo_id'      =>$faker->randomElement($meteo),
        'type_id'       =>$faker->randomElement($type),
        'etat_id'       =>$faker->randomElement($etat),
        'description'   =>$faker->text(100),
        'avancement'    =>$faker->numberBetween(0,5),
        'date_debut'    =>$faker->date(),
        'date_fin'      =>$faker->date(),
    ];
});
