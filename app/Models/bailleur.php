<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bailleur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'mail',
        'pays',
        'denomination',
        'pwd',
        
       
    ];
}
