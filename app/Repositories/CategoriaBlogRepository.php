<?php

namespace App\Repositories;

use App\Models\CategoriaBlog;
use App\Repositories\BaseRepository;

/**
 * Class CategoriaBlogRepository
 * @package App\Repositories
 * @version June 7, 2019, 8:53 pm UTC
*/

class CategoriaBlogRepository extends BaseRepository
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
        return CategoriaBlog::class;
    }
}
