<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Alumno
 * @package App\Models
 * @version November 4, 2022, 10:34 pm UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property int $edad
 * @property int $ci
 * @property string $telefono
 * @property string $direccion
 * @property string $email
 * @property string $profesion
 * @property tex $genero
 * @property string $fechanac
 */
class Alumno extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'alumnos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'curso_id',
        'nombre',
        'apellido',
        'edad',
        'ci',
        'telefono',
        'direccion',
        'gmail',
        'profesion',
        'genero',
        'fechanac'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'telefono' => 'string',
        'direccion' => 'string',
        'gmail' => 'string',
        'profesion' => 'string',
        'fechanac' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'edad' => 'required',
        'ci' => 'required',
        'telefono' => 'required',
        'direccion' => 'required',
        'gmail' => 'required',
        'profesion' => 'required',
        'genero' => 'required',
        'fechanac' => 'required',
        'curso_id' => 'required'
    ];
    public function cursos (){
        return $this->belongsTo('App\Models\Curso','curso_id');
    }
    
}
