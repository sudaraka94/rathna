<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlucosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glucoses', function (Blueprint $table) {
            $table->increments('report_id');
            $table->timestamps();
            $table->string('f_b_sugar')->nullable();
            $table->string('half_fasting_b_sugar')->nullable();
            $table->string('one_b_sugar')->nullable();
            $table->string('one_half_fasting_b_sugar')->nullable();
            $table->string('one_fasting_b_sugar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('glucoses');
    }
}
