<?php

namespace App\Http\Controllers\Api;

use App\Models\Car;
use App\Models\Optional;
use App\Models\CarHouse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){

        $cars = Car::with(["optionals", "carhouse"])->paginate(6);
        
        
        return response()->json([
            "success"  => true,
            "results"  => $cars
        ]);
    }
}
