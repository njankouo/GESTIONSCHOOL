<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    protected $fillable=['libelle','annee_id'];
    public function annee(){
        return $this->belongsTo(Annee::class,'annee_id','id');
    }
    use HasFactory;
}
