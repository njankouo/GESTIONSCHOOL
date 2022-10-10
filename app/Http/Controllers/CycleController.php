<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use Illuminate\Http\Request;

class CycleController extends Controller
{


public function destroy($id){

    $cycle=Cycle::find($id);
    $cycle->delete();
    return back()->with('success','Opreation reussi');

}
}
