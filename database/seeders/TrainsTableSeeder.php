<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        


     for ($i=0; $i <10; $i++) { 
        
        $train = new Train();
        $train->azienda = $faker->company;
        $train->stazione_partenza = $faker->city;
        $train->stazione_arrivo = $faker->city;
        $train->orario_partenza = $faker->time();
        $train->orario_arrivo = $faker->time();
        $train->codice_treno = $faker->unique()->bothify('AB###???');
        $train->numero_carrozze = $faker->numberBetween(1,18);
        $train->in_orario = $faker->boolean();
        $train->cancellato = $faker->boolean();
        //senza save non salva niente
        $train->save();

     }








    }
}
