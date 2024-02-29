<?php

namespace Database\Seeders;
use Faker\Provider\pt_BR\PhoneNumber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\CarHouse;
class CarHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<7;$i++){
            $carhouse = new CarHouse();
            $carhouse->name = $faker->words(2, true);
            $carhouse->phone_number = $faker->numberBetween(99999999, 999999999);
            $carhouse->email = $faker->email();
            $carhouse->sede = $faker->words(2, true);
            $carhouse->save();
    }
    }
}
