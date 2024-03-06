<?php

namespace App\Http\Controllers;

use App\Models\CarHouse;
use App\Http\Requests\StoreCarHouseRequest;
use App\Http\Requests\UpdateCarHouseRequest;
use Illuminate\Http\Request;

class CarHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $carhouse = CarHouse::all();

        return view("admin.car_houses.index", compact("carhouse"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("admin.car_houses.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarHouseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarHouseRequest $request)
    {
        $form_data = $request->all();

        $carhouse = new CarHouse();
    
        $carhouse->fill($form_data);
       
        $carhouse->save();

        return redirect()->route("admin.car_houses.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarHouse  $carHouse
     * @return \Illuminate\Http\Response
     */
    public function show(CarHouse $carHouse, $id)
    {
        $carhouse = CarHouse::find($id);
        
        return view ("admin.car_houses.show", compact("carhouse"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarHouse  $carHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(CarHouse $carHouse, $id)
    {
        $carhouse = CarHouse::find($id);
        return view ("admin.car_houses.edit", compact ("carhouse"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarHouseRequest  $request
     * @param  \App\Models\CarHouse  $carHouse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarHouseRequest $request, CarHouse $carhouse)
    {
        $form = $request->all();
        $carhouse->update($form);
        return redirect()->route('admin.carhouses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarHouse  $carHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarHouse $carHouse, $id)
    {
        CarHouse::find($id)->cars()->detach();
            
        CarHouse::destroy($carHouse->id);
        $carHouse->delete();
        return redirect()->route("admin.car_houses.index", ["carhouse" => $carHouse]);
    }
}
