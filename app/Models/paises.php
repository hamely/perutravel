<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class paises
 * @package App\Models
 * @version May 29, 2019, 5:23 pm UTC
 *
 * @property string codigo
 * @property string pais
 * @property string phone_code
 */
class paises extends Model
{
    use SoftDeletes;

    public $table = 'paises';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'pais',
        'phone_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo' => 'string',
        'pais' => 'string',
        'phone_code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'pais' => 'required',
        'phone_code' => 'required'
    ];

    
}
