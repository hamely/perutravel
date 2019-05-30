<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Testimonio
 * @package App\Models
 * @version May 30, 2019, 5:10 pm UTC
 *
 * @property string nombre
 * @property string path
 * @property string descripcion
 * @property string fecha
 * @property string estado
 * @property string abbr
 */
class Testimonio extends Model
{
    use SoftDeletes;

    public $table = 'testimonios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'path',
        'descripcion',
        'fecha',
        'estado',
        'abbr'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'path' => 'string',
        'descripcion' => 'string',
        'fecha' => 'string',
        'estado' => 'string',
        'abbr' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'path' => 'required',
        'descripcion' => 'required',
        'abbr' => 'required'
    ];

    
}
