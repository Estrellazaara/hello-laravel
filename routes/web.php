<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;
use App\Models\Superhero;

Route::get('/', function () {

    $superhero = Superhero::where('gender', 'male')->get();

    return response()->json([
        'superhero' => $superhero
    ]);

});



//Route::get('/universes', [UniverseController::class, 'index']);

Route::resource('/universes', UniverseController::class);