<?php

namespace App\Http\Controllers;
use App\Models\State;

use Illuminate\Http\Request;

class StateController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::all();
        return view('states.index', ['states'=>$states]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::all();
        return view('states.index', ['states'=>$states]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $state = new State;
        $state->name = $request->input('name');        
        $state->save();

        return redirect()->route('states.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $state = State::find($id);
        return view('states.show', ['state' => $state]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $state = State::find($id);
        $state->update($request->all());

        return redirect()->route('states.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $state = state::find($id);
        $state->delete();
 
        return redirect()->route('states.index');
    }
}
