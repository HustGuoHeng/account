<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',64);
            $table->string('user_name',64);
            $table->string('password',64);
            $table->string('wx_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
