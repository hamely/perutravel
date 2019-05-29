<?php

namespace App\Repositories;

use App\Models\paises;
use App\Repositories\BaseRepository;

/**
 * Class paisesRepository
 * @package App\Repositories
 * @version May 29, 2019, 5:23 pm UTC
*/

class paisesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'pais',
        'phone_code'
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
        return paises::class;
    }
}
