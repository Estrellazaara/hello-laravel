<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroeController;
//use App\Models\SuperheroeController;

Route::get('/', function () {

    $superhero = Superhero::where('gender', 'male')->get();

    return response()->json([
        'superhero' => $superhero
    ]);

});



//Route::get('/universes', [UniverseController::class, 'index']);

Route::resource('universes', UniverseController::class);

Route::resource('superheroes', SuperheroeController::class);
