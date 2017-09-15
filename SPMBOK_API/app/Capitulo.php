<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    protected $table = 'Capitulos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cap_ide', 'cap_des', 'cap_abr', 'cap_ncp'
    ];


    public function secciones()
    {
        return $this->hasMany('App\Seccion');
    }
}
