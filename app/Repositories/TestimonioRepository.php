<?php

namespace App\Repositories;

use App\Models\Testimonio;
use App\Repositories\BaseRepository;

/**
 * Class TestimonioRepository
 * @package App\Repositories
 * @version May 30, 2019, 5:10 pm UTC
*/

class TestimonioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'path',
        'descripcion',
        'fecha',
        'estado',
        'abbr'
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
        return Testimonio::class;
    }
}
