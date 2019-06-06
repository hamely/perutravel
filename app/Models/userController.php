<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class userController
 * @package App\Models
 * @version June 5, 2019, 10:20 pm UTC
 *
 * @property string privilege
 * @property string name
 * @property string description
 * @property string language_id
 * @property string email
 */
class userController extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    // protected $dates = ['deleted_at'];


    public $fillable = [
        'privilege',
        'name',
        'description',
        'language_id',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'privilege' => 'string',
        'name' => 'string',
        'description' => 'string',
        'language_id' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required'
    ];

    
}
