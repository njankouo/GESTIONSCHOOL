<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    protected $fillable=['eleve_id','classe_id','motif','date'];
    use HasFactory;

    public function eleve(){
        return $this->belongsTo(Eleve::class,'eleve_id','id');
    }
    public function classe(){
        return $this->belongsTo(Salle::class,'classe_id','id');
    }
}
