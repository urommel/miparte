<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    static $rules = [
        'estado' => 'required',
        'hora' => 'required',
        'justificacion' => 'required',

    ];

    protected $fillable = [
        'estado',
        'minutos',
        'dia',
        
        'justificacion',
        'personal_id',
    ];

    // de uno a muchos (inversa) persnnal

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
