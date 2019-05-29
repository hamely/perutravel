<?php

namespace App\Repositories;

use App\Models\multimedia;
use App\Repositories\BaseRepository;

/**
 * Class multimediaRepository
 * @package App\Repositories
 * @version May 29, 2019, 5:05 pm UTC
*/

class multimediaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
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
        return multimedia::class;
    }
}
