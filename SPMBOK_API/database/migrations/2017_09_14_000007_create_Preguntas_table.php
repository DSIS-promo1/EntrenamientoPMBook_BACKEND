<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Preguntas';

    /**
     * Run the migrations.
     * @table Preguntas
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('pre_ide');
            $table->integer('sec_ide');
            $table->integer('fue_ide');
            $table->integer('usu_ide');
            $table->text('pre_des')->nullable();
            $table->text('pre_arg')->nullable();
            $table->string('pre_niv', 1)->nullable();
            $table->string('pre_est', 1)->nullable();

            $table->index(["sec_ide"], 'fk_Preguntas_Secciones1_idx');

            $table->index(["usu_ide"], 'fk_Preguntas_Usuarios1_idx');

            $table->index(["fue_ide"], 'fk_Preguntas_Fuentes1_idx');


            $table->foreign('sec_ide', 'fk_Preguntas_Secciones1_idx')
                ->references('sec_ide')->on('Secciones')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('fue_ide', 'fk_Preguntas_Fuentes1_idx')
                ->references('fue_ide')->on('Fuentes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('usu_ide', 'fk_Preguntas_Usuarios1_idx')
                ->references('use_ide')->on('Usuarios')
                ->onDelete('no action')
                ->onUpdate('no action');
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
