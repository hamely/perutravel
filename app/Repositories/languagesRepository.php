<?php

namespace App\Repositories;

use App\Models\languages;
use App\Repositories\BaseRepository;

/**
 * Class languagesRepository
 * @package App\Repositories
 * @version May 29, 2019, 5:09 pm UTC
*/

class languagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'abrr',
        'status'
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
        return languages::class;
    }
}
