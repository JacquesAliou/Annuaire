<?php
use App\Etat;
use Illuminate\Database\Seeder;

class EtatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Etat::class, 15)->create();
    }
}