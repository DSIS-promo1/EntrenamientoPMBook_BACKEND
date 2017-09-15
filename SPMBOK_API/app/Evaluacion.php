<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'Evaluaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'eva_ide', 'eva_sec', 'eva_fec', 'eva_nta', 'usu_ide'
    ];


    public function usuario()
    {
        return $this->belongsTo('App\User' , 'usu_ide');
    }


    public function respuestas()
    {
        return $this->hasMany('App\Respuesta' , 'res_id');
    }
}