<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');
            $table->string('stato');
            $table->string('url');
            $table->integer('lunghezza');
            $table->integer('giri');
            $table->text('note');
            
            $table->string('club');
            $table->string('campionato');
            $table->date('dataqualifiche');
            $table->date('datagara');
            

            $table->string('auto');
            $table->string('meteo');
            

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
        Schema::dropIfExists('garas');
    }
}
