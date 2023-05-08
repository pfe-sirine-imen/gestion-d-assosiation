<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherents extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'mail',
        'pwd',
        'pays',
        'situation',
        'niveau',
        'photo',
        'copie',
        'code',
        'capital',
        'tel',
        'age',
       
    ];
}
