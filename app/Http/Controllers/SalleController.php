<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Salle;
use App\Models\Niveau;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    //

    public function index() {
        $cycle=Cycle::latest()->paginate(3);
        $niveau=Niveau::latest()->paginate(3);
        $salle=Salle::orderBy('libelle','asc')->get();
        return view('salles.index',compact('cycle','niveau','salle'));
    }

    public function add(Request $request){
        $request->validate([
            'libelle'=>'required'
        ],
        ['libelle.required'=>'renseignez le libelle']
    );
    Cycle::create([
     'libelle'=>$request->libelle
        // dd($request->all())
    ]);
    return back()->with('success','cycle enregistré');
    }
    public function sav(){

        $cycle=Cycle::orderBy('libelle','asc')->get();
        $niveau=Niveau::orderBy('libelle','asc')->get();
        $enseignant=Enseignant::orderBy('nom','asc')->get();

        return view('salles.addSalle',compact('cycle','niveau','enseignant'));
    }
    public function adds(Request $request){
        $request->validate([

        ],[]);
        Salle::create([
            'libelle'=>$request->libelle,
            'niveau_id'=>$request->niveaux,
            'cycle_id'=>$request->cycle_id,
            'enseignant_id'=>$request->prof_id
        ]);
        return redirect('/salle')->with('success','operation reussi avec success');
    }
    public function destroy($id){
        $salle=Salle::find($id);
        $salle->delete();
        return back()->with('success','operation realisee avec success');
    }
}
