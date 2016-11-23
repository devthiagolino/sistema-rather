<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) 
        {
            
            $table->increments('id');
               
            $table->integer('plano_id')->unsigned();
            $table->integer('vinculado_a')->unsigned();

            $table->string('logo', 4)->nullable();
            $table->string('email')->nullable();
            $table->string('telefone', 30)->nullable();
            $table->string('celular', 30)->nullable();
            $table->text('observacoes')->nullable();
            $table->string('cep', 8)->nullable();
            $table->string('endereco')->nullable();
            $table->string('end_numero', 30)->nullable();
            $table->string('end_complemento')->nullable();
            $table->string('bairro')->nullable();
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
        Schema::table('clientes', function (Blueprint $table) 
        {
            $table->drop('clientes');
        });
    }
}
