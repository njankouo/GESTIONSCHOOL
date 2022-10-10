<?php

namespace App\Models;

use App\Models\Cycle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Niveau extends Model
{
    use HasFactory;
    protected $table='niveaus';
    protected $fillable=['libelle','cycle_id'];
    public function cycle(){
        return $this->belongsTo(Cycle::class,'cycle_id','id');
    }
    public function salle(){
        return $this->hasMany(Salle::class);
    }

}
