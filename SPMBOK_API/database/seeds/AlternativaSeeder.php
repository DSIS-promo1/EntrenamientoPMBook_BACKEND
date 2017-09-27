<?php

use Illuminate\Database\Seeder;
use App\Pregunta;
use App\Alternativa;

class AlternativaSeeder extends Seeder
{
    public function run()
    {
        $cantidad = Pregunta::all()->count();
        for ($i=1;$i<$cantidad;$i++){

            for ($j=1;$j<5;$j++){

                Alternativa::create([
                    'pre_ide'  => $i,
                    'alt_des' => 'alternativa'.$j,
                    'alt_res' => 'V'
                ]);
            }

        }
    }
}
