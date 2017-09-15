<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Capitulo;


class CapituloSeeder extends Seeder{

    public function run(){


        for ($i=1;$i<15;$i++){

            Capitulo::create([
                'cap_des' => 'desc_'.$i,
                'cap_abr' => 'abr_'.$i,
                'cap_ncp' => $i,
            ]);

        }
    }
}