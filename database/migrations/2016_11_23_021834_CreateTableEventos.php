<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) 
        {
            
            $table->increments('id');

            $table->integer('tipo_id')->unsigned();
            
            $table->string('titulo')->nullable();
            $table->string('resumo')->nullable();
            $table->text('conteudo')->nullable();
            $table->dateTime('dth_inicio');
            $table->dateTime('dth_fim');
            $table->string('imagem', 4)->nullable();
            $table->boolean('ativo');

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
        Schema::table('eventos', function (Blueprint $table) {
            $table->drop('eventos');
        });
    }
}
