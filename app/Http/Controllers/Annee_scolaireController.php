<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Trimestre;
use Illuminate\Http\Request;

class Annee_scolaireController extends Controller
{
    public function index(){
        $an=Annee::OrderBy('libelle','desc')->get();
        $trim=Trimestre::latest()->paginate(3);
        return view('annee_scolaire.index',compact('an','trim'));
    }
    public function save(Request $request){
        $request->validate([
            'libelle'=>'required',
        ],
        [
            'libelle.required'=>'renseignez le libelle'
        ]
        );
        Annee::create([
            'libelle'=>$request->libelle
        ]);
        return back()->with('success','action realisee avec success');
    }
     public function changeStatus(Request $request)
    {
        $an = Annee::find($request->commande_id);
        $an->status= $request->status;
        $an->save();

        return back()->with('success','mise à jour effectuée');
    }
}
