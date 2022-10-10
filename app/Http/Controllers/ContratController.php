<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class ContratController extends Controller
{

    public function index(){
        $enseignant=Enseignant::orderBy('nom','asc')->get();
        $contrat=Contrat::orderBy('id','asc')->get();
        return view('contrat.index',compact('enseignant','contrat'));
    }
    public function save(Request $request){
        $request->validate([],[]);

        Contrat::create([
            // dd($request->all()),
             'enseignant_id'=>$request->enseignant,
             'date_debut'=>$request->date_debut,
             'date_fin'=>$request->date_fin,
            'file'=>$request->file

        ]);
        return back()->with('success','opération réalisée avec success');
    }
     public function update(Request $request)
    {
        if ($request->ajax()) {
            Contrat::find($request->pk)
                ->update([
                    $request->date_fin => $request->value
                ]);

            return response()->json(['success' => true]);
        }
    }
}
