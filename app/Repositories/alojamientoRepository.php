<?php

namespace App\Repositories;

use App\Models\alojamiento;
use App\Repositories\BaseRepository;

/**
 * Class alojamientoRepository
 * @package App\Repositories
 * @version May 29, 2019, 4:55 pm UTC
*/

class alojamientoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'id_ubigeo',
        'id_categoria',
        'id_tipo_alojamiento'
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
        return alojamiento::class;
    }
}
