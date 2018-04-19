<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDBiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_bies', function (Blueprint $table) {
            $table->increments('report_id');
            $table->timestamps();
            $table->string('d_by')->nullable();
            $table->string('asot')->nullable();
            $table->string('rh_fac')->nullable();
            $table->string('sal_h')->nullable();
            $table->string('sal_o')->nullable();
            $table->string('sal_ah')->nullable();
            $table->string('sal_bh')->nullable();
            $table->string('sodium')->nullable();
            $table->string('potassium')->nullable();
            $table->string('chloride')->nullable();
            $table->string('sgot')->nullable();
            $table->string('sgpt')->nullable();
            $table->string('tsh')->nullable();
            $table->string('tsh_rem')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('d_bies');
    }
}
