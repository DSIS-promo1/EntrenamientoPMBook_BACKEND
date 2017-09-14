<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Secciones';

    /**
     * Run the migrations.
     * @table Secciones
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('sec_ide');
            $table->integer('cap_id');
            $table->string('sec_des', 200);
            $table->string('sec_abr', 15);
            $table->string('sec_nsc', 8);

            $table->index(["cap_id"], 'fk_Seccion_Capitulo1_idx');


            $table->foreign('cap_id', 'fk_Seccion_Capitulo1_idx')
                ->references('cap_id')->on('Capitulos')
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
