<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    protected $table = 'Capitulos';

    public $timestamps = false;

    protected $primaryKey = 'cap_id';

    protected $fillable = [
        'cap_id', 'cap_des', 'cap_abr', 'cap_ncp'
    ];


    public function secciones()
    {
        return $this->hasMany('App\Seccion','cap_id');
    }
}
