<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Usuarios';

    /**
     * Run the migrations.
     * @table Usuarios
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('use_ide');
            $table->string('usu_nom', 60);
            $table->string('usu_ape', 60);
            $table->string('usu_sex', 1);
            $table->date('usu_fna');
            $table->string('usu_ema', 60);
            $table->string('usu_pwd', 60);
            $table->string('usu_cel', 12)->nullable();
            $table->date('usu_fre');
            $table->string('usu_tip', 1);
            $table->binary('usu_fto')->nullable();
            $table->string('usu_est', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
