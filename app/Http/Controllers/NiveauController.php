<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    //

    public function index()
    {
        $cycle=Cycle::orderBy('libelle','asc')->get();
        return view('niveaux.index',compact('cycle'));
    }
    public function save(Request $request){
        $request->validate([

        ],[]);
        Niveau::create([
            'libelle'=>$request->libelle,
            'cycle_id'=>$request->cycle_id
        ]);
        return redirect('/salle')->with('success','operation realisee avec success');
    }
}
