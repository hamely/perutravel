<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class itinerarios
 * @package App\Models
 * @version May 31, 2019, 5:57 pm UTC
 *
 * @property string nombre
 * @property string descripcion
 * @property string id_tour
 * @property string id_alojamiento
 * @property string dia
 * @property string departamento
 * @property string id_usuario
 */
class itinerarios extends Model
{
    use SoftDeletes;

    public $table = 'itinerarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'descripcion',
        'id_tour',
        'id_alojamiento',
        'dia',
        'departamento',
        'id_usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'id_tour' => 'string',
        'id_alojamiento' => 'string',
        'dia' => 'string',
        'departamento' => 'string',
        'id_usuario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'id_alojamiento' => 'required',
        'id_usuario' => 'required'
    ];

    
}
