<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esrs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('b_uria')->nullable();
            $table->string('esr')->nullable();
            $table->string('fbs')->nullable();
            $table->string('rbs')->nullable();
            $table->string('rh_f')->nullable();
            $table->string('s_creat')->nullable();
            $table->string('t_cholesterol')->nullable();
            $table->string('tri_g')->nullable();
            $table->string('hb')->nullable();
            $table->string('ppbs')->nullable();
            $table->string('sgot')->nullable();
            $table->string('sgot_r')->nullable();
            $table->string('sgpt')->nullable();
            $table->string('sgpt_r')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('esrs');
    }
}
