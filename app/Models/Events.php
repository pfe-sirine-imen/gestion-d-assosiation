<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'responsable',
        'date_debut',
        'date_fin',
        'objectif',
        'lieu',
    ];
}
