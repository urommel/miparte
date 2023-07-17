<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    // de uno a muchos (inversa) persnnal

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
