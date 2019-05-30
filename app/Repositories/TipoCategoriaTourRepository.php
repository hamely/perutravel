<?php

namespace App\Repositories;

use App\Models\TipoCategoriaTour;
use App\Repositories\BaseRepository;

/**
 * Class TipoCategoriaTourRepository
 * @package App\Repositories
 * @version May 30, 2019, 5:47 pm UTC
*/

class TipoCategoriaTourRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lenguaje_id',
        'nombre',
        'alias',
        'slug',
        'estado',
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
        return TipoCategoriaTour::class;
    }
}
