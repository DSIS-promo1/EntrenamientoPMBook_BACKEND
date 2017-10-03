<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Fuente;

class FuenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<15;$i++){

            Fuente::create([
                'fue_des' => 'capitulo_'.$i,
                'fue_abr' => 'abr_'.$i,	                
            ]);

        }
    }
}
