<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuente extends Model
{
    protected $table = 'Fuentes';

    public $timestamps = false;

    protected $primaryKey = 'fue_ide';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fue_ide', 'fue_des', 'fue_abr'
    ];



    public function preguntas()
    {
        return $this->hasMany('App\Pregunta' , 'pre_ide');
    }


}
