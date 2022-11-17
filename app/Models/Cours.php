<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $fillable=['enseignant_id','matiere_id','duree_cour','journee','classe_id','annee_id'];
    public function enseignant(){
        return $this->belongsTo(Enseignant::class,'enseignant_id','id');

    }
    public function matiere(){
        return $this->belongsTo(Matiere::class,'matiere_id','id');

    }
    public function classe(){
        return $this->belongsTo(Salle::class,'classe_id','id');
    }
    public function annee(){
        return $this->belongsTo(Annee::class,'annee_id','id');
    }
}
