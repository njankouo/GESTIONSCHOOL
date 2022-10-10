<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{

protected $table='salles';
protected $fillable=['libelle','niveau_id','cycle_id','enseignant_id'];
    use HasFactory;
    public function niveau(){
        return $this->belongsTo(Niveau::class,'niveau_id','id');
    }
    public function cycle(){
        return $this->belongsTo(Cycle::class,'cycle_id','id');
    }
    public function eleve(){
        return $this->hasMany(Eleve::class);
    }
     public function matiere(){
        return $this->belongsToMany(Matiere::class);
    }
    public function enseignant(){
        return $this->belongsTo(Enseignant::class);
    }
    public function sanction(){
        return $this->hasMany(Sanction::class);
    }
}
