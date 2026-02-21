<?php

use App\Http\Controllers\AssuranceController;
use App\Models\Assurance;
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

Route::get('/iage', function () {
    //return view('welcome');

    //INSERT
    /*$assurance = new Assurance();
    $assurance->libelle = "VIE";
    $assurance->montant = 200000;
    $assurance->bonus = 5;
    $assurance->save();*/

    //Find
    //$assurance = Assurance::find(2);
    //echo $assurance->libelle." ".$assurance->montant;

    //SUPPRESION
    //$assurance->delete();

    //Update

    //$assurance->libelle =  "HABITAT";
    //$assurance->montant = 100000;
    //$assurance->save(); //update(

    //ALL

    $assurances = Assurance::all();
    foreach ($assurances as $assurance) {
        echo $assurance->id." ". $assurance->libelle." ".$assurance->montant."<br>";
    }



});

Route::get('/assurance', [AssuranceController::class,'index']);
