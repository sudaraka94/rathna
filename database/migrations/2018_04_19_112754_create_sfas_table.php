<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sfas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('qty')->nullable();
            $table->string('viscosity')->nullable();
            $table->string('slt')->nullable();
            $table->string('colour')->nullable();
            $table->string('reaction')->nullable();
            $table->string('ph')->nullable();
            $table->string('micro')->nullable();
            $table->string('a_mot')->nullable();
            $table->string('s_mot')->nullable();
            $table->string('inactive')->nullable();
            $table->string('count')->nullable();
            $table->string('tas')->nullable();
            $table->string('pnc')->nullable();
            $table->string('rbc')->nullable();
            $table->string('globulus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sfas');
    }
}
