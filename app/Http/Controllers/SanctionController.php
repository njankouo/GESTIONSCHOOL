<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Salle;
use App\Models\Sanction;
use Illuminate\Http\Request;

class SanctionController extends Controller
{

    public function index(){
        $sanction=Sanction::orderBy('date','asc')->get();
        return view('sanction.index',compact('sanction'));
    }
    public function add(){
        $eleve=Eleve::orderBy('nom','asc')->get();
        $salle=Salle::orderBy('libelle','asc')->get();

        return view('sanction.add',compact('eleve','salle'));
    }
    public function save(Request $request){
        $request->validate([
            'date'=>'required',
            'classe_id'=>'required',
            'motif'=>'required',
            'eleve_id'=>'required'
        ],[
            'date.required'=>'renseignez la date de sanction',
            'classe_id.required'=>'renseignez la classe du concerné',
            'motif.required'=>'renseignez le motif de sanction',
            'eleve_id.request'=>'renseignez le nom'
        ]);
        Sanction::create([
            'classe_id'=>$request->classe_id,
            'eleve_id' =>$request->eleve_id,
            'motif' =>$request->motif,
            'date'=>$request->date,
        ]);
        return back()->with('success','operation réelisée avec success');
    }
}
