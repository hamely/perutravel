<?php

namespace App\Repositories;

use App\Models\Ubigeo;
use App\Repositories\BaseRepository;

/**
 * Class UbigeoRepository
 * @package App\Repositories
 * @version May 29, 2019, 4:34 pm UTC
*/

class UbigeoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'departamento',
        'provincia',
        'distrito'
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
        return Ubigeo::class;
    }
}
