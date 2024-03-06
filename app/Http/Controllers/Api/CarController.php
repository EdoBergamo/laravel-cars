<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){

        $cars = Car::with(["optionals", "car_house"])->paginate(4);
        
        return response()->json([
            "success"  => true,
            "results"  => $cars
        ]);
    }
}
