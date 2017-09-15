<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuente extends Model
{
    protected $table = 'Fuentes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fue_ide', 'fue_desc', 'fue_abr'
    ];



    public function preguntas()
    {
        return $this->hasMany('App\Pregunta' , 'pre_ide');
    }


}
