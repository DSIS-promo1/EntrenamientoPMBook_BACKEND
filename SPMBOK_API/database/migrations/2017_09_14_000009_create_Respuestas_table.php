<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Respuestas';

    /**
     * Run the migrations.
     * @table Respuestas
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            
            $table->increments('res_ide');
            $table->integer('eva_ide')->unsigned();
            $table->integer('alt_ide')->unsigned();

            $table->index(["alt_ide"], 'fk_Respuestas_Alternativas1_idx');

            $table->index(["eva_ide"], 'fk_Respuestas_Evaluaciones1_idx');

            $table->foreign('eva_ide', 'fk_Respuestas_Evaluaciones1_idx')
                ->references('eva_ide')->on('Evaluaciones');

            $table->foreign('alt_ide', 'fk_Respuestas_Alternativas1_idx')
                ->references('alt_ide')->on('Alternativas');
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
