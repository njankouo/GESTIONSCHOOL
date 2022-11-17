<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Eleve;
use App\Models\Salle;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(){
        return view('notes.index');
    }
    public function add_note($id){
        $class=Salle::find($id);
        $eleve=Eleve::all();
        return view('notes.index',compact('class','eleve'));
    }
    public function save(Request $request){
        $request->validate(
            [
            "nom"=>"required",
            'libelle'=>'required',
            'matiere'=>'required',
            'note'=>'required',
            'coef'=>'required',
            'annee'=>'required'

        ],
        [
            'nom.required'=>'renseignez le nom et prenom',
            'libelle.required'=>'renseignez ',
            'matiere.required'=>'renseignez la matiere',
            'note.required'=>'renseignez la note',
            'coef.required'=>'renseignez le coef',
            'annee.required'=>'renseignez l\'année',
        ]

    );
        Note::create([
            'nom'=>$request->nom,
            'libelle'=>$request->libelle,
            'matiere'=>$request->matiere,
            'note'=>$request->note,
            'coef'=>$request->coef,
            'date'=>$request->date,

        ]);
        return back()->with('success','notes enregistré avec success');

}

}
