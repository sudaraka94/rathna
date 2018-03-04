<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sfr',function (Blueprint $table){
            $table->increments('report_id');
            $table->string('hwo');
            $table->string('rwo');
            $table->string('ameba');
            $table->string('cysts');
            $table->string('clc');
            $table->string('s_rbc');
            $table->string('s_pus');
            $table->string('mucus');
            $table->string('macrophags');
            $table->string('consistens');
            $table->string('r_substances');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sfr');
    }
}
