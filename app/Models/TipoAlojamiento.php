<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoAlojamiento
 * @package App\Models
 * @version May 23, 2019, 5:31 pm UTC
 *
 * @property string name
 * @property string description
 */
class TipoAlojamiento extends Model
{
    use SoftDeletes;

    public $table = 'tipo_alojamientos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    
}
