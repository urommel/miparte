<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
	// 	'hora_inicio' => 'required',
	// 	'hora_fin' => 'required',
	// 	'personal_id' => 'required',
    // ];

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


    protected $fillable = [
        'dia',
        'trabaja',
        'hora_inicio',
        'hora_fin',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Asegurarse de que los campos estén correctamente seteados antes de guardarlos en la base de datos

            // Ejemplo de validación
            $rules = [
                'dia' => 'required',
                'trabaja' => 'required|boolean',
                'hora_inicio' => 'nullable|date_format:H:i',
                'hora_fin' => [
                    'nullable',
                    'date_format:H:i',
                    Rule::requiredIf($model->trabaja),
                ],
            ];

            $model->validate($rules);
        });
    }

    protected function validate(array $rules)
    {
        $validator = validator(request()->all(), $rules);

        if ($validator->fails()) {
            throw new \InvalidArgumentException('Validation failed: ' . $validator->errors()->first());
        }
    }





    protected $table = 'horarios';

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }


}
