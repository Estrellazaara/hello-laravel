<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroeController 

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroe::all();

        return view('superheroes.index', compact('superheroes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universes = Universe::all();

        return view('superheroes.create', compact('universes'));
    }
    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        Superheroe::create([
            'name' => $request->name,
            'real_name' => $request->real_name,
            'gender' => $request->gender,
            'universe_id' => $request->universe_id
        ]);

        return redirect()->route('superheroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.show', compact('superheroe'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.edit', compact('superheroe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //add ($request);
        $superheroe = Superheroe::findOrFail($id);
        $superheroe->update([
            'name' => $request->name,
            'real_name' => $request->real_name,
            'gender' => $request->gender,
            'universe_id' => $request->universe_id
        ]);
        
        return redirect()->route('superheroes.show', $superheroe->id);
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy(string $id)
    {
        $superheroe = Superheroe::findOrFail($id);

        $superheroe->delete();
        return redirect()->route('superheroes.index');

        foreach ($super as $super) {
            $super->delete();
        }
       
        $superheroe->delete();
        return redirect()->route('superheroes.index');
    }
}
