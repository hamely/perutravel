<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tours
 * @package App\Models
 * @version May 31, 2019, 4:39 pm UTC
 *
 * @property string nombre
 * @property string img
 * @property string descripcion
 * @property string estado
 * @property string principal
 * @property string slug
 * @property string multimedia_id
 * @property string organizacion
 */
class tours extends Model
{
    use SoftDeletes;

    public $table = 'tours';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'img' => 'string',
        'descripcion' => 'string',
        'estado' => 'string',
        'principal' => 'string',
        'slug' => 'string',
        'multimedia_id' => 'string',
        'organizacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
    ];

    
}
