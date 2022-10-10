<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{

    protected $fillable=['nom','prenom','email','sexe','telephone1','telephone2','status','regime','date_naissance','lieu_naissance'];
    use HasFactory;
}
