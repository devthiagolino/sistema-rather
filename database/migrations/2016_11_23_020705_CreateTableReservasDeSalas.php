<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservasDeSalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas_de_salas', function (Blueprint $table) 
        {
            $table->increments('id');

            $table->integer('cliente_id')->unsigned();
            $table->integer('sala_id')->unsigned();
            $table->dateTime('dth_inicio');
            $table->dateTime('dth_fim');
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
        Schema::table('reservas_de_salas', function (Blueprint $table) 
        {
            $table->drop('reservas_de_salas');
        });
    }
}
