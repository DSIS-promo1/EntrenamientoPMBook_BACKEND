<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Pregunta;


class PreguntaSeeder extends Seeder
{
    public function run()
    {
        $cantidad = User::all()->count();
        for ($i=1;$i<$cantidad;$i++){
                Pregunta::create([
                    'sec_ide' => $i,
                    'fue_ide' => $i,
                    'usu_ide' => $i,
                    'pre_des' => 'pre_descripcion'.$i,
                    'pre_arg' => 'pre_argumento'.$i,
                    'pre_niv' => 'B',
                    'pre_est' => 'A'
                ]);
        }
    }
}
