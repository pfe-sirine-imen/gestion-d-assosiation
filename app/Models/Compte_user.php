<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'mail',
        'pwd',
    ];
}
