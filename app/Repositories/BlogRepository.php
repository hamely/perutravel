<?php

namespace App\Repositories;

use App\Models\Blog;
use App\Repositories\BaseRepository;

/**
 * Class BlogRepository
 * @package App\Repositories
 * @version June 7, 2019, 9:34 pm UTC
*/

class BlogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usuario_id',
        'categoria_blog_id',
        'titulo',
        'url',
        'fechaPublicacion',
        'estado',
        'contenido',
        'contador'
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
        return Blog::class;
    }
}
