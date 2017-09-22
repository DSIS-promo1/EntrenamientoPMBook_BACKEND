<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=8;$i<15;$i++){

            User::create([
                'name' => 'nombre_'.$i,
                'usu_ape' => 'apellido_'.$i,
                'usu_sex' => 'F',
                'usu_fna' => date('Y-m-d'),
                'email' => str_random(10).'@gmail.com',
                'password' => 'pass_'.$i,
                'usu_cel' => $i*1234578,
                'usu_fre' => date('Y-m-d'),
                'usu_tip' => 'U',
                'usu_fto' => 'foto_'.$i,
                'usu_est' => 'A'
            ]);

        }
    }
}
