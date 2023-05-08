<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caisse extends Model
{
    use HasFactory;
    protected $fillable = [
        'cin',
        'nom',
        'activite',
        'responsable',
        'benefice',
        'date',
        'total',
        'heure',
        'solde',
    ];
}

