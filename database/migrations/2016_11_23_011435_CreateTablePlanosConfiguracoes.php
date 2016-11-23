<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlanosConfiguracoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos_configuracoes', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('plano_id');
            $table->string('chave')->nullable();
            $table->string('valor')->nullable();
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
        Schema::table('planos_configuracoes', function (Blueprint $table) 
        {
            $table->drop('planos_configuracoes');
        });
    }
}
