<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Evaluaciones';

    /**
     * Run the migrations.
     * @table Evaluaciones
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
        
            $table->increments('eva_ide');
            $table->integer('usu_ide')->unsigned();
            $table->integer('eva_sec');
            $table->date('eva_fec');
            $table->integer('eva_nta');

            $table->index(["usu_ide"], 'fk_Evaluaciones_Usuarios1_idx');


            $table->foreign('usu_ide', 'fk_Evaluaciones_Usuarios1_idx')
                ->references('usu_ide')->on('users');
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
