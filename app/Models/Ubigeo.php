<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ubigeo
 * @package App\Models
 * @version May 29, 2019, 4:34 pm UTC
 *
 * @property string codigo
 * @property string departamento
 * @property string provincia
 * @property string distrito
 */
class Ubigeo extends Model
{
    use SoftDeletes;

    public $table = 'ubigeos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'departamento',
        'provincia',
        'distrito'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo' => 'string',
        'departamento' => 'string',
        'provincia' => 'string',
        'distrito' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'departamento' => 'required',
        'provincia' => 'required',
        'distrito' => 'required'
    ];

    
}
