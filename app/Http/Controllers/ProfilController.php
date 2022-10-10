<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {return view('profiles.index');}

    public function modification(){return view('profiles.update');}
}
