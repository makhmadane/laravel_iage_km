<?php

namespace App\Http\Controllers;

use App\Models\Assurance;
use Illuminate\Http\Request;

class AssuranceController extends Controller
{
    public function index(){
        $assurances = Assurance::all(); //model
        return view('assurance.liste', compact('assurances')); //VIEW
    }
}
