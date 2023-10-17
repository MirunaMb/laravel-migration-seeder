<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train; //Importo il Model
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            // Creo un nuovo oggetto Train e assegna i valori con Faker
            $train                    = new Train();
            $train->azienda           = $faker->company;
            $train->stazione_partenza = $faker->city;
            $train->stazione_arrivo   = $faker->city;
            $train->orario_partenza   = $faker->time('H:i:s');
            $train->orario_arrivo     = $faker->time('H:i:s');
            $train->codice_treno      = $faker->unique()->bothify('??????');
            $train->numero_carozze    = $faker->numberBetween(1, 20);
            $train->in_orario         = $faker->boolean;
            $train->cancellato        = $faker->boolean;

            $train->save(); // Salvo l'oggetto nel database
        }

    }

}