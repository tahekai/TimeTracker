<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFinishTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finishTime', function (Blueprint $table) {
    
            
            $table->increments('id');
            $table->integer('chipcode');
            $table->integer('corridore_id')->default(2)->change();
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
        Schema::drop('finishTime');
    }
}
