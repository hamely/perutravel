<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tipo_habitacion
 * @package App\Models
 * @version May 29, 2019, 4:37 pm UTC
 *
 * @property string name
 * @property string descripcion
 */
class tipo_habitacion extends Model
{
    use SoftDeletes;

    public $table = 'tipo_habitacions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'descripcion' => 'required'
    ];

    
}
