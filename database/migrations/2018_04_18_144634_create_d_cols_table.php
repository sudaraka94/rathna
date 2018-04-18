<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDColsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_cols', function (Blueprint $table) {
            $table->increments('report_id');
            $table->timestamps();
            //sfr
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

            //ufr
            $table->string('appearance')->nullable();
            $table->string('reaction')->nullable();
            $table->string('albumen')->nullable();
            $table->string('sugar')->nullable();
            $table->string('acetone')->nullable();
            $table->string('bile')->nullable();
            $table->string('urobilino')->nullable();
            $table->string('u_pus')->nullable();
            $table->string('u_rbc')->nullable();
            $table->string('fpi')->nullable();
            $table->string('cast')->nullable();
            $table->string('o_deposit')->nullable();
            $table->string('crystals')->nullable();

            //fbs
            $table->string('fbs')->nullable();

            //fbc
            $table->string('hb')->nullable();
            $table->string('wbc')->nullable();
            $table->string('poly')->nullable();
            $table->string('lym')->nullable();
            $table->string('eso')->nullable();
            $table->string('bas')->nullable();
            $table->string('mon')->nullable();
            $table->string('malaria')->nullable();
            $table->string('platelets')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('d_cols');
    }
}
