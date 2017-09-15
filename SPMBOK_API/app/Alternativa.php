<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    protected $table = 'Alternativas';

    public $timestamps = false;

    protected $primaryKey = 'alt_ide';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alt_ide', 'alt_des', 'alt_res', 'pre_ide'
    ];


    public function pregunta()
    {
        return $this->belongsTo('App\Pregunta' , 'pre_id');
    }

    public function respuestas()
    {
        return $this->hasMany('App\Respuesta' , 'res_id');
    }


}
