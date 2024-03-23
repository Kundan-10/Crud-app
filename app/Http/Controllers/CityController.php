<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\City;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view("cities.index", ['cities'=> $cities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        return view("cities.index", ["cities"=> $cities]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

                $name = $request->input('name');
                $state_id = $request->input('state_id');

                $city = new City;
                $city->name = $name;
                $city->state_id = $state_id;
        
                $city->save();
                return redirect()->route('cities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $city = City::find($id);
        $city->save();

        return redirect()->route('cities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = city::find($id);
        $city->delete();
 
        return redirect()->route('cities.index');
    }
}
