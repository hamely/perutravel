<?php

namespace App\Repositories;

use App\Models\userController;
use App\Repositories\BaseRepository;

/**
 * Class userControllerRepository
 * @package App\Repositories
 * @version June 5, 2019, 10:20 pm UTC
*/

class userControllerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'privilege',
        'name',
        'description',
        'language_id',
        'email'
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
        return userController::class;
    }
}
