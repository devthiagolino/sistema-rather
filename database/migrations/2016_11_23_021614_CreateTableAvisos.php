<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAvisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avisos', function (Blueprint $table) 
        {
            $table->increments('id');
            
            $table->string('titulo')->nullable();
            $table->text('conteudo')->nullable();
            $table->boolean('ativo');
            $table->dateTime('agendar_para');

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
        Schema::table('avisos', function (Blueprint $table) 
        {
            $table->drop('avisos');
        });
    }
}
