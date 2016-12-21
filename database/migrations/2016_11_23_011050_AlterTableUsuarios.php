<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) 
        {
            $table->string('foto')->nullable();
            $table->boolean('ativo')->nullable();
        });

        Schema::table('admin_users', function (Blueprint $table) 
        {
            $table->string('foto')->nullable();
            $table->boolean('ativo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) 
        {
            $table->dropColumn(['foto','ativo']);
        });

        Schema::table('admin_users', function (Blueprint $table) 
        {
            $table->dropColumn(['foto','ativo']);
        });
    }
}
