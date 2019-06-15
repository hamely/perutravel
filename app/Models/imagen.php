<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class multimedia
 * @package App\Models
 * @version May 29, 2019, 5:05 pm UTC
 *
 * @property string nombre
 * @property string descripcion
 */
class imagen extends Model
{
    use SoftDeletes;

    public $table = 'imagen';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'multimedia_id',
        'name',
        'path',
        'size',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'path' => 'string',
        'size' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
  

    
}
