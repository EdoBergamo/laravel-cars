<?php

use App\Http\Controllers\Api\CarController as CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get("/cars", [CarController::class, "index"]);
Route::get("/cars/{id}", [CarController::class, "show"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
