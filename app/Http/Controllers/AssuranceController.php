<?php

namespace App\Http\Controllers;

use App\Models\Assurance;
use App\Models\Type;
use Illuminate\Http\Request;

class AssuranceController extends Controller
{
    public function index(){
        $assurances = Assurance::paginate(3); //model
        return view('assurance.liste', compact('assurances')); //VIEW
    }

    public function create(){
        $assurance = new Assurance();
        $types = Type::all();
        return view('assurance.add', compact('assurance','types'));
    }

    public function store(Request $request){

        $assurance = new Assurance();
        $assurance->libelle = $request['libelle'];
        $assurance->montant = $request['montant'];
        $assurance->bonus  = $request['bonus'];
        $assurance->type_id = $request['type_id'];

        $assurance->save();

        return redirect('/assurance')->with('success','Assurance ajoute avec succes');


    }
    public function destroy($id){
        $assurance =  Assurance::find($id);
        $assurance->delete();
        return redirect('/assurance')->with('delete','Assurance supprimer avec succes');
    }

    public function edit($id){
        $assurance = Assurance::find($id);
        $types = Type::all();
        return view('assurance.add', compact('assurance','types'));
    }

    public function update(Request $request){
       $assurance = Assurance::find($request['id']);
       $assurance->libelle = $request['libelle'];
       $assurance->montant = $request['montant'];
       $assurance->bonus  = $request['bonus'];
       $assurance->type_id = $request['type_id'];
       $assurance->save();
       return redirect('/assurance');
    }
}
