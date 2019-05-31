<?php

namespace App\Repositories;

use App\Models\itinerarios;
use App\Repositories\BaseRepository;

/**
 * Class itinerariosRepository
 * @package App\Repositories
 * @version May 31, 2019, 5:57 pm UTC
*/

class itinerariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'id_tour',
        'id_alojamiento',
        'dia',
        'departamento',
        'id_usuario'
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
        return itinerarios::class;
    }
}
