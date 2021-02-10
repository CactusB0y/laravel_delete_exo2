<?php

use App\Http\Controllers\VoitureController;
use App\Models\Voiture;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $voitures = Voiture::all();
    $moins = Voiture::where('prix', '<', 4000)->get();
    $plus = Voiture::where('prix', '>', 4000)->get();
    $reductions = Voiture::where('reduction', '!=', null)->get();
    return view('welcome',compact('voitures','moins','plus','reductions'));
});

Route::get('/create', [VoitureController::class, 'create']);
Route::post('/voiture-store', [VoitureController::class, 'store']);
Route::post('/voiture-delete/{id}', [VoitureController::class, 'destroy']);