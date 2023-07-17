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
        'dia' => 'required',
        'fecha' => 'required',
        'personal_id' => 'required',
    ];

    protected $fillable = [
        'estado',
        'minutos',
        'dia',
        'fecha',
        'justificacion',
        'personal_id',
    ];

    // de uno a muchos (inversa) persnnal

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
