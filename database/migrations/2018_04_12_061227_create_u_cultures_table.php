<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUCulturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_cultures', function (Blueprint $table) {
            $table->increments('report_id');
            $table->timestamps();
            $table->string('p_cells')->nullable();
            $table->string('r_cells')->nullable();
            $table->string('e_cells')->nullable();
            $table->string('c_report')->nullable();
            $table->string('b_count')->nullable();
            $table->string('a_test')->nullable();
            $table->string('augmentin')->nullable();
            $table->string('ampicillin')->nullable();
            $table->string('amikacin')->nullable();
            $table->string('amoxycilin')->nullable();
            $table->string('ciprofloxacin')->nullable();
            $table->string('cephalexin')->nullable();
            $table->string('ceftazidime')->nullable();
            $table->string('cefoxitin')->nullable();
            $table->string('cefuroxime')->nullable();
            $table->string('gentamicin')->nullable();
            $table->string('meropenem')->nullable();
            $table->string('norfloxacin')->nullable();
            $table->string('nitrofurantoin')->nullable();
            $table->string('nalidixic')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('u_cultures');
    }
}
