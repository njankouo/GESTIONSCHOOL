<?php

namespace App\Models;

use App\Models\Niveau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cycle extends Model
{
    use HasFactory;
    protected $table="cycles";
     protected $fillable=['libelle'];
    public function niveau(){
        return $this-> HasMany(Niveau::class);
    }
    public function salle(){
        return $this->hasMany(Salle::class);
    }
}
