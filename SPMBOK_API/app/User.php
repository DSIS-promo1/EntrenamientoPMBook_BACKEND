<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'usu_ape', 'usu_sex', 'usu_fna', 'usu_cel', 'usu_fre', 'usu_tip', 'usu_fto', 'usu_est'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function preguntas()
    {
        return $this->hasMany('App\Pregunta' , 'pre_ide');
    }

    public function evaluaciones()
    {
        return $this->hasMany('App\evaluacion' , 'pre_ide');
    }
}
