<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Optional;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Http\Controllers\Controller;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderByDesc("id")->get();
        return view("admin.cars.index", compact("cars"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optionals = Optional::all();
        return view("admin.cars.create", compact("optionals"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        $form_data = $request->all();

        $car = new Car();
    
        $car->fill($form_data);
       
        $car->save();
        if($request->has("optionals")){

            $car->optionals()->attach($form_data["optionals"]);
        }
        

        return redirect()->route("admin.cars.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view ("admin.cars.show", compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {

        $optionals = Optional::all();
        return view ("admin.cars.edit", compact ("car", "optionals"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $form_data = $request->all();
       
        $car->update($form_data);
        
        if($request->has("optionals")){

            $car->optionals()->sync($form_data["optionals"]);
        }
        else
        {
            $car->optionals()->sync([]);
        }
        return redirect()->route("admin.cars.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        {
            $car->delete();
            return redirect()->route("admin.cars.index", ["car" => $car]);
        }
    }

    
    public function sommaPrezzo(){
        $somma = 0;

        $prezzo =  $car->prezzo;

        foreach($optionals as $optional){
            $somma += $optional->price;

        };
        $prezzo_complessivo = $car->prezzo  + $somma;

        return sommaPrezzo();

    }
}
