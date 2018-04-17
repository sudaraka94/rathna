<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hbs', function (Blueprint $table) {
            $table->increments('report_id');
            $table->timestamps();
            $table->string('hb')->nullable();
            $table->string('wbc')->nullable();
            $table->string('poly')->nullable();
            $table->string('lym')->nullable();
            $table->string('eso')->nullable();
            $table->string('bas')->nullable();
            $table->string('mon')->nullable();
            $table->string('malaria')->nullable();
            $table->string('platelets')->nullable();
            $table->string('remarks')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hbs');
    }
}
