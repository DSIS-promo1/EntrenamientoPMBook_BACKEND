<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CapituloSeeder');
        $this->call('SeccionSeeder');
        $this->call('FuenteSeeder');
        $this->call('UsuarioSeeder');
        $this->call('PreguntaSeeder');
        $this->call('AlternativaSeeder');
        $this->call('EvaluacionSeeder');
        $this->call('RespuestaSeeder');

    }
}
