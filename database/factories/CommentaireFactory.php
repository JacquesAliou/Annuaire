<?php




use App\Commentaire;
use App\Projet;
use App\User;
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

$factory->define(Commentaire::class, function (Faker $faker) {

    $contenu = $faker->text(500);
    $user = User::all()->pluck('login')->toArray();
    $projet = Projet::all()->pluck('id')->toArray();



    return [
        'contenu'   =>$contenu,
        'user_login'   =>$faker->randomElement($user),
        'projet_id' =>$faker->randomElement($projet),
    ];
});
