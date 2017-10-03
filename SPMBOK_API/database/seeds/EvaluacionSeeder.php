<?php

use Illuminate\Database\Seeder;
use App\Evaluacion;
use Carbon\Carbon;
use App\User;

class EvaluacionSeeder extends Seeder
{
    public function run()
    {
        $cantidad = User::all()->count();

        for ($i=1;$i<$cantidad;$i++){

            for ($j=5;$j<=20;$j++){

                Evaluacion::create([
                    'usu_ide'  => $i,
                    'eva_sec' => 30,
                    'eva_Fec' => Carbon::now()->toDateString(),
                    'eva_nta' => $j
                ]);
            }

        }
    }
}
