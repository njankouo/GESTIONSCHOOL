<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Matiere;
use Illuminate\Http\Request;
use PDF;
class GroupeController extends Controller
{


    public function index()
    {
        $groupe=Groupe::orderBy('libelle','asc')->get();
        return view('Groupe.index',compact('groupe'));
    }
    public function save(Request $request){
        $request->validate([
            'libelle'=>'required|unique:groupe_matiere,libelle'
        ],
        ['libelle.required'=>'renseignez le libelle']


    );
    Groupe::create([
        'libelle'=>$request->libelle
    ]);
    return back()->with('success','operation realisée avec success');
    }
    public function edit($id){
        $group=Groupe::find($id);
         return view('Groupe.AddMatiere',compact('group'));

    }
    public function AddMatiere(Request $request){
        $request->validate(['matiere'=>'required'],['matiere.required'=>'renseignez la matiere']);
        Matiere::create([
            'groupe_id'=>$request->groupe_id,
            'libelle'=>$request->matiere
        ]);
        return back()->with('success','operation realisée avec success');
    }
}
