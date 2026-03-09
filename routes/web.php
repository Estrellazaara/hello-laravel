<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Superheroe;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Universes - READ
|--------------------------------------------------------------------------
*/

Route::get('/universes', function () {
    return response()->json([
        'status' => true,
        'universes' => Universe::with('superheroes')->get()
    ]);
});


/*
|--------------------------------------------------------------------------
| Superheroes - READ
|--------------------------------------------------------------------------
*/

Route::get('/superheroes', function () {
    return response()->json([
        'status' => true,
        'superheroes' => Superheroe::with('universe')->get()
    ]);
});


/*
|--------------------------------------------------------------------------
| Universes - CREATE
|--------------------------------------------------------------------------
*/

Route::post('/universes/create', function (Request $request) {

    $universe = Universe::create([
        'universe' => $request->universe,
        'company' => $request->company,
        'age' => $request->age
    ]);

    return response()->json([
        'status' => true,
        'universe' => $universe
    ]);

});


/*
|--------------------------------------------------------------------------
| Superheroes - CREATE
|--------------------------------------------------------------------------
*/

Route::post('/superheroes/create', function (Request $request) {

    $hero = Superheroe::create([
        'name' => $request->name,
        'real_name' => $request->real_name,
        'gender' => $request->gender,
        'Universe_id' => $request->Universe_id
    ]);

    return response()->json([
        'status' => true,
        'superhero' => $hero
    ]);

});


/*
|--------------------------------------------------------------------------
| Universes - UPDATE
|--------------------------------------------------------------------------
*/

Route::put('/universes/update/{id}', function (Request $request, $id) {

    $universe = Universe::find($id);

    $universe->update([
        'universe' => $request->universe,
        'company' => $request->company,
        'age' => $request->age
    ]);

    return response()->json([
        'status' => true,
        'universe' => $universe
    ]);

});


/*
|--------------------------------------------------------------------------
| Superheroes - UPDATE
|--------------------------------------------------------------------------
*/

Route::put('/superheroes/update/{id}', function (Request $request, $id) {

    $hero = Superheroe::find($id);

    $hero->update([
        'name' => $request->name,
        'real_name' => $request->real_name,
        'gender' => $request->gender,
        'Universe_id' => $request->Universe_id
    ]);

    return response()->json([
        'status' => true,
        'superhero' => $hero
    ]);

});

//Route::get('/welcome', function () {
//   return view('welcome');
// });

// Route::get('/superheroes', function () {
//     return view('superheroes1');
// });

// Route::get('/universes', function () {
 #   return view('universes1');
#});

#Route::get('/superpowers', function () {
#    return view('superpowers');
#});

