<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImpressoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impressoes', function (Blueprint $table) 
        {
            $table->increments('id');
            
            $table->integer('cliente_id')->unsigned();
            $table->string('qtd_folhas')->nullable();
            $table->text('descricao')->nullable();
            $table->boolean('colorido')->nullable();
            $table->string('tipo_papel', 50)->nullable();

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
        Schema::table('impressoes', function (Blueprint $table) 
        {
            $table->drop('impressoes');
        });
    }
}
