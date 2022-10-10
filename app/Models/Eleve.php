<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $fillable=['cycle_id','annee_id','salle_id','nom','prenom','telephone1','telephone2','sexe','date_naissance','lieu_naissance','image','nom_pere','nom_mere','telephone_pere','telephone_mere','profession_pere','profession_mere'];
    use HasFactory;
    public function salle(){
        return $this->belongsTo(Salle::class,'salle_id','id');
    }
    public function annee(){
        return $this->belongsTo(Annee::class,'annee_id','id');
    }
    public function cycle(){
        return $this->belongsTo(Cycle::class,'cycle_id','id');
    }
}
