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

    public function show($id)
    {
        $car = Car::with(["optionals", "carhouse"])->find($id);

        if (!$car) {
            return response()->json(['error' => 'Auto non trovata'], 404);
        }

        return response()->json([
            'success' => true,
            'result' => $car
        ]);
    }
}
