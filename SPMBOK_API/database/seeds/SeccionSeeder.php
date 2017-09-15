<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Seccion;
use App\Capitulo;


class SeccionSeeder extends Seeder{

    public function run(){

        $cantidad = Capitulo::all()->count();

        for ($i=1;$i<$cantidad;$i++){

            for ($o=1;$o<6;$o++){

                Seccion::create([
                    'cap_id'  => $i,
                    'sec_des' => 'desc_'.$o,
                    'sec_abr' => 'abr_'.$o,
                    'sec_nsc' => '1.'.$o,
                ]);
            }

        }
    }
}