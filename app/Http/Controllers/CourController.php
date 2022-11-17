<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Cours;
use App\Models\Salle;
use App\Models\Matiere;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class CourController extends Controller
{
    public function index(){
        $enseignant=Enseignant::orderBy('nom','asc')->get();
        $matiere=Matiere::orderBy('libelle','asc')->get();
        $classe=Salle::orderBy('libelle','asc')->get();
        $cour=Cours::orderBy('enseignant_id','asc')->get();
        $annee=Annee::orderBy('libelle','asc')->get();
        return view('cours.index',compact('enseignant','matiere','classe','cour','annee'));
    }
    public function save(Request $request){
        $request->validate([],[]);
        Cours::create([
            'enseignant_id'=>$request->enseignant,
            'classe_id'=>$request->classe,
            'duree_cour'=>$request->duree,
            'matiere_id'=>$request->matiere,
            'journee'=>$request->jour,
            'annee_id'=>$request->annee,
        ]);
        return back()->with('success','operation réalisée avec success');
    }
    public function edit($id){
        $cours=Cours::find($id);
          $enseignant=Enseignant::orderBy('nom','asc')->get();
        $matiere=Matiere::orderBy('libelle','asc')->get();
        $classe=Salle::orderBy('libelle','asc')->get();
        $cour=Cours::orderBy('enseignant_id','asc')->get();
        $annee=Annee::orderBy('libelle','asc')->get();
        return view('cours.edit',compact('cours','enseignant','matiere','classe','annee'));
    }
    public function updat(Request $request,Cours $cours){
        $request->validate([],[]);
        $cours->update([
               'enseignant_id'=>$request->enseignant,
            'classe_id'=>$request->classe,
            'duree_cour'=>$request->duree,
            'matiere_id'=>$request->matiere,
            'journee'=>$request->jour,
            'annee_id'=>$request->annee,
        ]);
        return redirect('cours/liste');
    }
}
