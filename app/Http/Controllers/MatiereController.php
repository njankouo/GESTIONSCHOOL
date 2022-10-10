<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    //

    public function index(){
        $matiere=Matiere::orderBy('libelle','asc')->get();
        return View('groupe.matiere',compact('matiere'));
    }
    public function save(){
        return view('matiere.index');
    }
    public function add(){
        return view('matiere.matiere');
    }
}
