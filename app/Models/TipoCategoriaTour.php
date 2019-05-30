<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoCategoriaTour
 * @package App\Models
 * @version May 30, 2019, 5:47 pm UTC
 *
 * @property string lenguaje_id
 * @property string nombre
 * @property string alias
 * @property string slug
 * @property string estado
 * @property string descripcion
 */
class TipoCategoriaTour extends Model
{
    use SoftDeletes;

    public $table = 'tipo_categoria_tours';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'lenguaje_id',
        'nombre',
        'alias',
        'slug',
        'estado',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lenguaje_id' => 'string',
        'nombre' => 'string',
        'alias' => 'string',
        'slug' => 'string',
        'estado' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lenguaje_id' => 'required',
        'nombre' => 'required',
        'alias' => 'required'
    ];

    
}
