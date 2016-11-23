<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCheckInOut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkin_out', function (Blueprint $table) 
        {
            $table->increments('id');
            
            $table->integer('cliente_id')->unsigned();
            $table->dateTime('checkin');
            $table->dateTime('checkout');

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
        Schema::table('checkin_out', function (Blueprint $table) 
        {
            $table->drop('checkin_out');   
        });
    }
}
