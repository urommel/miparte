<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

/**
 * Class Horario
 *
 * @property $id
 * @property $dia
 * @property $hora_inicio
 * @property $hora_fin
 * @property $personal_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Personal $personal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{

    // static $rules = [
	// 	'dia' => 'required',
	// 	'hora_inicio' => 'required|date_format:H:i',
    //     'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
	// 	'personal_id' => 'required',
    // ];



    public static function rules()
    {
        return [
            'dia' => ['required', Rule::in(['lunes', 'martes', 'miércoles', 'jueves', 'viernes'])],
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
        ];
    }

    public static function messages()
    {
        return [
            'dia.required' => 'El día es obligatorio.',
            'dia.in' => 'El día debe ser lunes, martes, miércoles, jueves o viernes.',
            'hora_inicio.required' => 'La hora de inicio es obligatoria.',
            'hora_inicio.date_format' => 'El formato de la hora de inicio debe ser H:i.',
            'hora_fin.required' => 'La hora de fin es obligatoria.',
            'hora_fin.date_format' => 'El formato de la hora de fin debe ser H:i.',
            'hora_fin.after' => 'La hora de fin debe ser posterior a la hora de inicio.',
        ];
    }



    // protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    // protected $fillable = ['dia','hora_inicio','hora_fin','personal_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    // public function personal()
    // {
    //     return $this->hasOne('App\Models\Personal', 'id', 'personal_id');
    // }

    protected $fillable = ['dia', 'hora_inicio', 'hora_fin'];

    // public function rules()
    // {
    //     return [
    //         'dia' => 'required',
    //         'hora_inicio' => 'required|date_format:H:i',
    //         'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
    //     ];
    // }

    protected $table = 'horarios';

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }


}
