<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUfrPlusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ufr_pluses', function (Blueprint $table) {
            $table->increments('report_id');
            $table->timestamps();
            $table->string('fbs')->nullable();
            $table->string('hb')->nullable();
            $table->string('ppbs')->nullable();
            $table->string('rbs')->nullable();
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


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ufr_pluses');
    }
}
