<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('usu_ide');
            $table->string('name' , 60);
            $table->string('email', 60)->unique();
            $table->string('password');
            $table->string('usu_ape', 60);
            $table->string('usu_sex', 1);
            $table->date('usu_fna');
            $table->string('usu_cel', 12)->nullable();
            $table->date('usu_fre');
            $table->string('usu_tip', 1);
            $table->binary('usu_fto')->nullable();
            $table->string('usu_est', 1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
