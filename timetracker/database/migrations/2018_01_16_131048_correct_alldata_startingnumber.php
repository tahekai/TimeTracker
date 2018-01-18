<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorrectAlldataStartingnumber extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alldatas', function (Blueprint $table) {
            $table->integer('startingnumber')->unique()->change();
            $table->integer('chipcode')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alldatas', function (Blueprint $table) {
            //
        });
    }
}
