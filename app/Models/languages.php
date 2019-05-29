<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class languages
 * @package App\Models
 * @version May 29, 2019, 5:09 pm UTC
 *
 * @property string nombre
 * @property string abrr
 * @property string status
 */
class languages extends Model
{
    use SoftDeletes;

    public $table = 'languages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'abrr',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'abrr' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'abrr' => 'required',
        'status' => 'required'
    ];

    
}
