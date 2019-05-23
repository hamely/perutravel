<?php

namespace App\Repositories;

use App\Models\TipoAlojamiento;
use App\Repositories\BaseRepository;

/**
 * Class TipoAlojamientoRepository
 * @package App\Repositories
 * @version May 23, 2019, 5:31 pm UTC
*/

class TipoAlojamientoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return TipoAlojamiento::class;
    }
}
