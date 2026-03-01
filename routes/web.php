<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Superheroe;

// Universes
Route::get('/universes', function () {
    return response()->json([
        'status' => true,
        'universes' => Universe::all()
    ]);
});

// Superheroes
Route::get('/superheroes', function () {
    return response()->json([
        'status' => true,
        'superheroes' => Superheroe::all()
    ]);
});


#Route::get('/welcome', function () {
#    return view('welcome');
#});

#Route::get('/superheroes', function () {
#    return view('superheroes1');
#});

#Route::get('/universes', function () {
 #   return view('universes1');
#});

#Route::get('/superpowers', function () {
#    return view('superpowers');
#});
