<?php

use App\Meteo;
use Illuminate\Database\Seeder;

class MeteosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Meteo::class, 15)->create();
    }
}
