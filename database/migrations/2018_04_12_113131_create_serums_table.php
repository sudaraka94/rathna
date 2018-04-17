<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serums', function (Blueprint $table) {
            $table->increments('report_id');
            $table->timestamps();
            $table->string('esr')->nullable();
            $table->string('hiv')->nullable();
            $table->string('ion_r')->nullable();
            $table->string('ion_remarks')->nullable();
            $table->string('malaria')->nullable();
            $table->string('platelets')->nullable();
            $table->string('s_amylase')->nullable();
            $table->string('amy_remarks')->nullable();
            $table->string('s_bilirubin')->nullable();
            $table->string('bil_remarks')->nullable();
            $table->string('s_calcium')->nullable();
            $table->string('cal_remarks')->nullable();
            $table->string('s_gamma')->nullable();
            $table->string('gam_remarks')->nullable();
            $table->string('troponin')->nullable();
            $table->string('u_micro')->nullable();
            $table->string('micro_remarks')->nullable();
            $table->string('vdrl')->nullable();
            $table->string('s_potassium')->nullable();
            $table->string('pot_remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('serums');
    }
}
