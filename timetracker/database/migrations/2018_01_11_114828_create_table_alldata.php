<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlldata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alldata', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chipcode');
            $table->integer('startingnumber');
            $table->string('fullname');
            $table->integer('corridore_id')->default(1);
            $table->time('corridore_time');
            $table->integer('finish_id')->default(2);
            $table->time('finish_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alldata');
    }
}
