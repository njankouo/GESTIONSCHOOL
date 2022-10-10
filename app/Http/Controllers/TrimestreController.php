<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Trimestre;
use Illuminate\Http\Request;

class TrimestreController extends Controller
{

    public function index($id)
    {
        $answer=Annee::find($id);
        return view('annee_scolaire.trimestre',compact('answer'));
    }

    public function save(Request $request){
        $request->validate([

        ],[]);
        Trimestre::create([
            'libelle'=>$request->libelle,
            'annee_id'=>$request->annee_id
        ]);
        return back()->with('success','operation realisee avec success');
    }
}
