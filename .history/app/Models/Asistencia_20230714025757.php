<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    static $rules = [
        'fecha' => 'required',
        'hora' => 'required',
        'tipo' => 'required',

    ];

    protected $fillable = [
        'fecha',
        'hora',
        'tipo',
        'personal_id',
    ];

    // de uno a muchos (inversa) persnnal

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
