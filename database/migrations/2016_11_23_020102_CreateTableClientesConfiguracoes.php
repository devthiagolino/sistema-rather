<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClientesConfiguracoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_configuracoes', function (Blueprint $table) 
        {
            $table->increments('id');
            
            $table->integer('cliente_id')->unsigned();
            $table->string('chave')->nullable();
            $table->text('valor')->nullable();
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
        Schema::table('clientes_configuracoes', function (Blueprint $table) 
        {
            $table->drop('clientes_configuracoes');
        });
    }
}
