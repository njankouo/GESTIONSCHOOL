<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable=['groupe_id','libelle'];
    public function groupe(){
        return $this->belongsTo(Groupe::class,'groupe_id','id');
    }
    public function salle(){
        return $this->belongsToMany(Salle::class);
    }
}
