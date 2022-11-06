<?php

namespace App\Repositories;

use App\Models\Alumno;
use App\Repositories\BaseRepository;

/**
 * Class AlumnoRepository
 * @package App\Repositories
 * @version November 4, 2022, 10:34 pm UTC
*/

class AlumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'edad',
        'ci',
        'telefono',
        'direccion',
        'email',
        'profesion',
        'genero',
        'fechanac'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alumno::class;
    }
}
