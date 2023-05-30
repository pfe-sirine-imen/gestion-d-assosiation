<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeUserMail;
use Illuminate\Database\Eloquent\fill;
//use App\Http\Controllers\profile;

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
