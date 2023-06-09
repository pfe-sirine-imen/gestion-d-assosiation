<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bailleur;

class Don extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'destination',
        'nature',
        'donateur',
        'type',
        'date',
        'montant',
        
    ];

    public function bailleurs(){
        return $this->hasMany(Bailleur::class);
      
    }
}
