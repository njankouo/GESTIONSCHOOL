<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $fillable=['libelle'];
    protected $table='groupe_matiere';
    use HasFactory;
public function matiere(){
    return $this->hasMany(Matiere::class);
}
}
