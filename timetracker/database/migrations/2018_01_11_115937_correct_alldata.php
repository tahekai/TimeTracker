<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorrectAlldata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alldatas', function (Blueprint $table) {
            $table->time('corridore_time')->nullable()->change();
            $table->time('finish_time')->nullable()->change();
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
