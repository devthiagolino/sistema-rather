<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClientesUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_usuarios', function (Blueprint $table) 
        {
            $table->increments('id');
            
            $table->integer('cliente_id')->unsigned();
            $table->integer('usuario_id')->unsigned();

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
        Schema::table('clientes_usuarios', function (Blueprint $table) 
        {
            $table->drop('clientes_usuarios');
        });
    }
}
