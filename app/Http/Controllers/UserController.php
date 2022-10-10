<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user=User::all();
        return view('utilisateurs.index',compact('user'));
    }
    public function save(Request $request){
        $request->validate([],[]);
       User::create([
        // dd($request->all())
         'nom'=>$request->nom,
        'email'=>$request->email,
        'telephone'=>$request->telephone,
        'sexe'=>$request->sexe,
       ]);
       return back()->with('success','utilisateur crée avec success');
    }
    public function edit($id){
        $user=User::find($id);
        $role=Role::orderBy('libelle','asc')->get();
        return view('utilisateurs.edit',compact('user','role'));
    }
    public function updat(Request $request,User $user){
                $request->validate([],[]);

                $user->Update([

         'nom'=>$request->nom,
        'email'=>$request->email,
        'telephone'=>$request->telephone,
        'sexe'=>$request->sexe,
        'password'=>password_hash($_POST['password'],PASSWORD_DEFAULT),
        'role_id'=>$request->role,
                ]);
                return back()->with('success','');
    }
    public function modifier(Request $request, User $user){
         if ($request->ajax()) {
           $user->update([
            'nom'=>$request->nom,
           ]);

            return response()->json(['success' => true]);
        }
    }
}
