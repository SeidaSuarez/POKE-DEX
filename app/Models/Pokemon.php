<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    // Definición de la relación inversa muchos a uno con User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'users_id');
    }
}
