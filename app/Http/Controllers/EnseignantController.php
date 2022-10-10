<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class EnseignantController extends Controller
{

    public function index(){
        $enseignant=Enseignant::orderBy('nom','asc')->get();
        return view('enseignants.index',compact('enseignant'));
    }
    public function add(){
        return view('enseignants.new');
    }

    public function save(Request $request){
        $request->validate([
            'nom'=>'required',
            'sexe'=>'required',
            'date_naissance'=>'required',
            'status'=>'required',
            'regime'=>'required',
            'email'=>'required',
           // 'telephone1'=>'required',
           // 'telephone2'=>'required',
        ],[
                'nom.required'=>'renseignez le nom',
                'sexe.required'=>'renseignez le sexe',
                'date_naissance.required'=>'renseignez la date de naissance',
                'status.required'=>'renseignez le status',
                'regime.required'=>'renseignez le regime',
                'email.required'=>'renseignez le email',
                //'telephone2.required'=>'renseignez le telephone2',
               // 'telephone1.required'=>'renseignez le telephone1'
        ]);

        Enseignant::create([
           // dd($request->all())
           'nom'=>$request->nom,
           'prenom'=>$request->prenom,
           'email'=>$request->email,
           'telephone1'=>$request->telephone1,
           'telephone2'=>$request->telephone2,
           'regime'=>$request->regime,
           'status'=>$request->status,
           'sexe'=>$request->sexe,
           'date_naissance'=>$request->date_naissance,
           'lieu_naissance'=>$request->lieu_naissance,
        ]);
        return back();
    }
}
