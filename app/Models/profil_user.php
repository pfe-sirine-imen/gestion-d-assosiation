<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'pwd',
        'prenom',
        'mail',
        'domaine_activite',
        'pays',
      
       
    ];
}
