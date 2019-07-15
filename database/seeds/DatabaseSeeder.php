<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([

             UsersTableSeeder::class,
             EtatsTableSeeder::class,
             MeteosTableSeeder::class,
             TypesTableSeeder::class,
             ProjetsTableSeeder::class,
             RolesTableSeeder::class,
             CommentairesTableSeeder::class,
             ActeurTableSeeder::class,

         ]);
    }
}
