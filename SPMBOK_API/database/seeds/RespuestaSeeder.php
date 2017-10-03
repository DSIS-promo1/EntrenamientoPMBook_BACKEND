<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Evaluacion;
use App\Respuesta;

class RespuestaSeeder extends Seeder
{
    public function run()
    {
        $cantidad = Evaluacion::all()->count();
        for ($i=1;$i<$cantidad;$i++){

            for ($j=1;$j<5;$j++){

                Respuesta::create([
                    'eva_ide'  => $i,
                    'alt_ide' =>  $j
                ]);
            }

        }
    }
}
