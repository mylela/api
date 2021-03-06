<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('gara_id')->unsigned();
            $table->foreign('gara_id')->references('id')->on('garas')->onDelete('cascade');

            $table->string('pilota');
            $table->string('tempo');
            $table->string('auto');
            $table->integer('minuti');
            $table->integer('secondi');
            $table->integer('millesimi');


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
        Schema::dropIfExists('tempos');
    }
}
