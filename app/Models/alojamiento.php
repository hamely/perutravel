<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class alojamiento
 * @package App\Models
 * @version May 29, 2019, 4:55 pm UTC
 *
 * @property string nombre
 * @property string id_ubigeo
 * @property string id_categoria
 * @property string id_tipo_alojamiento
 */
class alojamiento extends Model
{
    use SoftDeletes;

    public $table = 'alojamientos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'id_ubigeo',
        'id_categoria',
        'id_tipo_alojamiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'id_ubigeo' => 'string',
        'id_categoria' => 'string',
        'id_tipo_alojamiento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    
}
