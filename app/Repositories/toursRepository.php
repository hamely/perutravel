<?php

namespace App\Repositories;

use App\Models\tours;
use App\Repositories\BaseRepository;

/**
 * Class toursRepository
 * @package App\Repositories
 * @version May 31, 2019, 4:39 pm UTC
*/

class toursRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'img',
        'descripcion',
        'estado',
        'principal',
        'slug',
        'multimedia_id',
        'organizacion'
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
        return tours::class;
    }
}
