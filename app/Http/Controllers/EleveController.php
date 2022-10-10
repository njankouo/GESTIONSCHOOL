<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use App\Models\Annee;
use App\Models\Cycle;
use App\Models\Eleve;
use App\Models\Salle;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    //

    public function index(){
        $elevef=Eleve::where('sexe',1)->count();
        $elevem=Eleve::where('sexe',0)->count();
$eleve=Eleve::OrderBy('id','desc')->get();
$an=Annee::all();
    return view('eleves.index',compact('eleve','elevef','elevem'));
    }


    public function add(){
        return view('eleves.new');
    }
    public function save(Request $request){
        $request->validate([
            'nom'=>'required',
            'telephone1'=>'required',
            'sexe'=>'required',
            'date_naissance'=>'required',
            //'lieu_naissance'=>'required',
            'nom_pere'=>'required',
            'nom_mere'=>'required',
            'telephone_pere'=>'required',
            'telephone_mere'=>'required',
            'profession_pere'=>'required',
            'profession_mere'=>'required',

        ],


        [
        'nom.required'=>'renseignez le nom',
         'telephone1.required'=>'renseignez le telephone1',
         'sexe.required'=>'renseignez le sexe',
        'date_naissance.required'=>'renseignez la date naissance',
      //  'lieu_naissance.required'=>'renseignez le lieu naissance',
        'nom_pere.required'=>'renseignez le nom du pere',
        'nom_mere.required'=>'renseignez le nom de la mere',
        'telephone_mere.required'=>'renseignez le telephone de la mere',
        'telephone_pere.required'=>'renseignez le telephone du pere',
          'profession_pere.required'=>'renseignez la profession du pere',
           'profession_mere.required'=>'renseignez la profession de la mere',
        ]
        );
        Eleve::create([
    // dd($request->all())
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone1'=>$request->telephone1,
            'telephone2'=>$request->telephone2,
            'nom_mere'=>$request->nom_mere,
            'profession_pere'=>$request->profession_pere,
            'profession_mere'=>$request->profession_mere,
            'nom_pere'=>$request->nom_pere,
            'sexe'=>$request->sexe,
            'date_naissance'=>$request->date_naissance,
            'lieu_naissance'=>$request->lieu_naissance,
            'image'=>$request->image,
            'telephone_pere'=>$request->telephone_pere,
           'telephone_mere'=>$request->telephone_mere,

        ]);
        return back()->with('success','éleve crée avec success');
    }
    public function edit($id){
        $eleve=Eleve::find($id);
        $classe=Salle::orderBy('libelle','asc')->get();
        $cycle=Cycle::orderBy('libelle','asc')->get();
        $annee=Annee::OrderBy('libelle','asc')->get();
        return view('eleves.edit',compact('eleve','classe','annee','cycle'));
    }
    public function modifier(Request $request,Eleve $eleve){
        $request->validate([],[]);
        $eleve->update([
             'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone1'=>$request->telephone1,
            'telephone2'=>$request->telephone2,
            'nom_mere'=>$request->nom_mere,
            'profession_pere'=>$request->profession_pere,
            'profession_mere'=>$request->profession_mere,
            'nom_pere'=>$request->nom_pere,
            'sexe'=>$request->sexe,
            'date_naissance'=>$request->date_naissance,
            'lieu_naissance'=>$request->lieu_naissance,
            'image'=>$request->image,
            'telephone_pere'=>$request->telephone_pere,
           'telephone_mere'=>$request->telephone_mere,
            'salle_id'=>$request->classe_id,
            'cycle_id'=>$request->cycle_id,
             'annee_id'=>$request->annee_id,
       // dd($request->all())
        ]);
        return back()->with('success','mise à jour reussi');
    }
    public function print(){
          $elevef=Eleve::where('sexe',0)->count();
        $elevem=Eleve::where('sexe',1)->count();
        $eleve=Eleve::OrderBy('nom','asc')->get();
        $pdf=PDF::Loadview('eleves.pdf',compact('eleve','elevef','elevem'));
         $pdf->setOptions(['isPhpEnabled' => true]);
  $pdf->setPaper('L', 'landscape');
       return $pdf->stream();
       // return $pdf->download('eleve.pdf');
    }
}
