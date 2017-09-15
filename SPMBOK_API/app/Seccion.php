<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'Secciones';


    public $timestamps = false;

    protected $primaryKey = 'sec_ide';

    protected $fillable = [
        'sec_ide', 'sec_des', 'sec_abr', 'sec_nsc', 'cap_id'
    ];


    public function capitulo()
    {
        return $this->belongsTo('App\Capitulo','cap_id');
    }

    public function preguntas()
    {
        return $this->hasMany('App\Pregunta' , 'pre_ide');
    }
}
