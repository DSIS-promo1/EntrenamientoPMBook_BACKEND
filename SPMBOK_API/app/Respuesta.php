<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = 'Respuestas';

    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'res_ide', 'eva_ide', 'alt_ide'
    ];


    public function alternativa()
    {
        return $this->belongsTo('App\Alternativa' , 'alt_ide');
    }

    public function evaluacion()
    {
        return $this->belongsTo('App\Evaluacion' , 'eva_ide');
    }


}
