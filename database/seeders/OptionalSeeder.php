<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Optional;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
 /*        $array = [

            "Tettuccio panoramico",
            "Sedili riscaldati",
            "Sensori di parcheggio",
            "Cerchi in lega",
            "Palette al volante"
        ];

        $prices = [
            "10000",
            "15990",
            "11999",
            "5000",
            "29"
        ];

        $types = [
            "estetico",
            "QoL",
            "QoL",
            "estetico",
            "QoL"
        ];
        
        foreach($array as $item){ 
            $optional = new Optional();
            $optional->name($item); 
            $optional->save();
        }
        foreach($prices as $price){
           
           $optional->price($price); 
            $optional->save();
        }
        foreach($types as $type){
           
            $optional->type($type);
            $optional->save();
        }
            
        } */

        for($i=0;$i<5;$i++){
            $optional = new optional();
            $optional->name = $faker->words(1, true);
            $optional->price = $faker->numberBetween(2000, 10000);
            $optional->type = $faker->words(1, true);
            $optional->save();
    }
}
}

