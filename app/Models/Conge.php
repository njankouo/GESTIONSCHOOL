<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    use HasFactory;
    protected $fillable=['date_debut','date_fin','enseignant_id',];
    public function enseignant(){
        return $this->belongsTo(Enseignant::class,'enseignant_id','id');
    }
}
