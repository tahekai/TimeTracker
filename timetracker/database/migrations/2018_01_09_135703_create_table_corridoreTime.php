<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCorridoreTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corridoreTime', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('chipcode');
            $table->integer('corridore_id')->default(1);
            $table->timestamp('time')->useCurrent();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('corridoreTime');
    }
}
