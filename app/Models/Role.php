<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Role extends LaratrustRole
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
