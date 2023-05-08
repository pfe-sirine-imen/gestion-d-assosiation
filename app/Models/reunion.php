<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reunion extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'invite',
        'mail',
        'date',
        'heure',
        'place',
        'rendu',
    ];
}
