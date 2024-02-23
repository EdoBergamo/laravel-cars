<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use Faker\Generator as Faker;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<5;$i++){
            $car = new Car();
            $car->marca = $faker->words(1, true);
            $car->modello = $faker->words(3, true);
            $car->alimentazione = $faker->words(1, true);
            $car->prezzo = $faker->numberBetween(2000, 99999);
            $car->num_porte = $faker->numberBetween(3, 5);
            $car->chilometri = $faker->numberBetween(0, 200000);
            $car->colore = $faker->safeColorName();
            $car->anno = $faker->year('-10 years');
            $car->save();
        }
        
    }
}
