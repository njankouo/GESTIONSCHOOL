<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


    public function modifier(Request $request){
         if ($request->ajax()) {
          if($request->action=='Edit'){
                $data=array(
                    'nom'=>$request->nom,
                    'email'=>$request->email,

                    'telephone' =>$request->telephone,
                    'password' =>$request->password_hash($_POST['password']),
                );
                DB::table('users')->where('id',$request->id)->update($data);
          }
          if($request->action=='delete'){
            DB::table('users')->where('id',$request->id)->delete();
          }

            return request()->json($request);
        }
    }
}
