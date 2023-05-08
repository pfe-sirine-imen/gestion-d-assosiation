<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'objectif',
        'responsable',
        'date_debut',
        'date_fin',
        'montant',
        'etat',
    ];
}
