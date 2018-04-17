<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miscs', function (Blueprint $table) {
            $table->increments('report_id');
            $table->timestamps();
            $table->string('bt')->nullable();
            $table->string('ct')->nullable();
            $table->string('crp')->nullable();
            $table->string('sodium')->nullable();
            $table->string('potassium')->nullable();
            $table->string('chloride')->nullable();
            $table->string('fil_m')->nullable();
            $table->string('fil_g')->nullable();
            $table->string('g_hb')->nullable();
            $table->string('g_hb_r')->nullable();
            $table->string('pcv')->nullable();
            $table->string('platelets')->nullable();
            $table->string('p_time')->nullable();
            $table->string('p_time_r')->nullable();
            $table->string('n_control')->nullable();
            $table->string('n_control_r')->nullable();
            $table->string('inr')->nullable();
            $table->string('stp')->nullable();
            $table->string('albumin')->nullable();
            $table->string('globulin')->nullable();
            $table->string('agr')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('miscs');
    }
}
