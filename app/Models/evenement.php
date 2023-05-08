<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'responsable',
        'date_debut',
        'date_fin',
        'lieu',
        'budget',
        'objectif',
        'facture',
    ];
}
