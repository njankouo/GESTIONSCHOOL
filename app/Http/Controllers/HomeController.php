<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Eleve;
use App\Models\Contrat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contrat=Contrat::orderBy('id','asc')->get();
        $eleve=Eleve::where('sexe',1)->count();
         $eleves=Eleve::where('sexe',0)->count();
        return view('home',compact('contrat','eleve','eleves'));
    }
}
