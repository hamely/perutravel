<?php

namespace App\Repositories;

use App\Models\CategoriaAlojamiento;
use App\Repositories\BaseRepository;

/**
 * Class CategoriaAlojamientoRepository
 * @package App\Repositories
 * @version May 23, 2019, 7:25 pm UTC
*/

class CategoriaAlojamientoRepository extends BaseRepository
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
        return CategoriaAlojamiento::class;
    }
}
