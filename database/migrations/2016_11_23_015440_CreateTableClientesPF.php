<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClientesPF extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_pf', function (Blueprint $table) 
        {
            $table->increments('id');
            
            $table->integer('cliente_id')->unsigned();
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('nome_apresentacao_nick')->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('rg', 50)->nullable();
            $table->enum('genero', ['M', 'F', 'O']);

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
        Schema::table('clientes_pf', function (Blueprint $table) 
        {
            $table->drop('clientes_pf');
        });
    }
}
