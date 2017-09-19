<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'Preguntas';

     public $timestamps = false;

    protected $primaryKey = 'pre_ide';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pre_ide', 'sec_ide', 'fue_ide', 'usu_ide', 'pre_des', 'pre_arg', 'pre_niv', 'pre_est'
    ];


    public function seccion()
    {
        return $this->belongsTo('App\Seccion' , 'sec_ide');
    }

    public function fuente()
    {
        return $this->belongsTo('App\Fuente' , 'fue_ide');
    }


  	public function usuario()
    {
        return $this->belongsTo('App\User' , 'usu_ide');
    }


    public function alternativas()
    {
        return $this->hasMany('App\Alternativa' , 'pre_ide');
    }

}
