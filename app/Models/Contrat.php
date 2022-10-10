<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable=['enseignant_id','date_debut','date_fin','file'];
    public function enseignant(){
        return $this->belongsTo(Enseignant::class,'enseignant_id','id');
    }
}
