<?php

namespace App\Http\Controllers;

use App\Models\Conge;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class CongeController extends Controller
{
    public function index(){
             $conges=Conge::orderBy('date_debut','asc')->get();
        return view('conges.index',compact('conges'));
    }
    public function add(){
        $enseignant=Enseignant::orderBy('nom','asc')->get();

        return view('conges.add',compact('enseignant'));
    }
    public function save(Request $request){
        $request->validate([],[]);
        Conge::create([
            'date_debut' =>$request->date_debut,
            'date_fin' =>$request->date_fin,
            'enseignant_id' =>$request->enseignant,
        ]);
        return back()->with('success','operation réalisée avec success');
    }
}
