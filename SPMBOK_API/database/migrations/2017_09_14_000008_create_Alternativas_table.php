<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Alternativas';

    /**
     * Run the migrations.
     * @table Alternativas
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
        
            $table->increments('alt_ide');
            $table->integer('pre_ide')->unsigned();
            $table->text('alt_des');
            $table->string('alt_res', 1);

            $table->index(["pre_ide"], 'fk_Alternativas_Preguntas1_idx');


            $table->foreign('pre_ide', 'fk_Alternativas_Preguntas1_idx')
                ->references('pre_ide')->on('Preguntas');
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
