<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePpbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppbs', function (Blueprint $table) {
            $table->increments('report_id');
            $table->timestamps();
            $table->string('ppbs')->nullable();
            $table->string('rbs')->nullable();
            $table->string('ppbs_p_breakfast')->nullable();
            $table->string('ppbs_p_lunch')->nullable();
            $table->string('ppbs_p_dinner')->nullable();
            $table->string('u_sugar')->nullable();
            $table->string('u_albumen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ppbs');
    }
}
