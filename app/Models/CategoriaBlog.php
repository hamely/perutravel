<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CategoriaBlog
 * @package App\Models
 * @version June 7, 2019, 8:53 pm UTC
 *
 * @property string nombre
 * @property string descripcion
 */
class CategoriaBlog extends Model
{
    use SoftDeletes;

    public $table = 'categoria_blogs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required'
    ];

    
}
