<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CarController as CarController;
use Illuminate\Http\Request;
use App\Models\Car;

class DashboardController extends Controller
{
    public function index(){
        return view("admin.cars.dashboard");
    }
}
