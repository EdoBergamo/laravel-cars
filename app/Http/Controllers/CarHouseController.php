<?php

namespace App\Http\Controllers;

use App\Models\CarHouse;
use App\Http\Requests\StoreCarHouseRequest;
use App\Http\Requests\UpdateCarHouseRequest;

class CarHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarHouseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarHouseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarHouse  $carHouse
     * @return \Illuminate\Http\Response
     */
    public function show(CarHouse $carHouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarHouse  $carHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(CarHouse $carHouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarHouseRequest  $request
     * @param  \App\Models\CarHouse  $carHouse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarHouseRequest $request, CarHouse $carHouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarHouse  $carHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarHouse $carHouse)
    {
        //
    }
}