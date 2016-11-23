<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventosTipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos_tipos', function (Blueprint $table) 
        {
            $table->increments('id');
            
            $table->string('titulo')->nullable();
            $table->string('slug')->nullable();
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
        Schema::table('eventos_tipos', function (Blueprint $table) 
        {
            $table->drop('eventos_tipos');
        });
    }
}
