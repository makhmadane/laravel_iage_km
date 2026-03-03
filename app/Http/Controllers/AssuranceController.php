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

    public function create(){
        return view('assurance.add');
    }

    public function store(Request $request){

        $assurance = new Assurance();
        $assurance->libelle = $request['libelle'];
        $assurance->montant = $request['montant'];
        $assurance->bonus  = $request['bonus'];
        $assurance->save();

        return redirect('/assurance');


    }
    public function destroy($id){
        $assurance =  Assurance::find($id);
        $assurance->delete();
        return redirect('/assurance');
    }

    public function edit($id){
        $assurance = Assurance::find($id);
        return view('assurance.add', compact('assurance'));
    }
}
