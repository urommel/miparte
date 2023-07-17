<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Personal
 *
 * @property $id
 * @property $DNI
 * @property $apellidos
 * @property $direccion
 * @property $telefono
 * @property $ciudad
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Personal extends Model
{


    static $rules = [
        'DNI' => 'required',
        'apellidos' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'ciudad' => 'required',
        'email' => 'required',
        'name' => 'required',
        'password' => 'required',
        'fnacimiento' => 'required',
        'foto'=> 'required',
        'genero' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['DNI', 'apellidos', 'direccion', 'telefono', 'ciudad', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    


}
