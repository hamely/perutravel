<?php

namespace App\Repositories;

use App\Models\tipo_habitacion;
use App\Repositories\BaseRepository;

/**
 * Class tipo_habitacionRepository
 * @package App\Repositories
 * @version May 29, 2019, 4:37 pm UTC
*/

class tipo_habitacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'descripcion'
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
        return tipo_habitacion::class;
    }
}
