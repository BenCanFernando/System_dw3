<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Curso
 * @package App\Models
 * @version November 4, 2022, 11:31 pm UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property string $fechainic
 * @property string $fechafin
 * @property string $estado
 */
class Curso extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cursos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'fechainic',
        'fechafin',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'descripcion' => 'string',
        'fechainic' => 'string',
        'fechafin' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'fechainic' => 'required',
        'fechafin' => 'required',
        'estado' => 'required'
    ];
    public function alumnos (){
        return $this->hasMany('App\Models\Alumnos');
    }
}
