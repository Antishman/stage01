<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/name', function () {
    return response('Anteneh', 200);
});

Route::get('/hobby', function () {
    return response()->json(['hobby' => 'meditation'], 200);
});

Route::get('/dream', function () {
    return response('To feel whole, to be alive', 200);
});

Route::get('/', function () {
    return view('welcome');
});
