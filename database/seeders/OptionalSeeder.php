<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Optional;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [

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

        $optional = new Optional();

        foreach($array as $item){

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
            
        }
    }


