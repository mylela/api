<?php

use Faker\Generator as Faker;
use App\Model\Gara;

$factory->define(App\Model\Tempo::class, function (Faker $faker) {

    
    

    return [
        

        // $table->integer('garas_id')->unisigned()->index();
        // $table->foreign('garas_id')->references('id')->onDelete('cascade');

        // $table->string('pilota');
        // $table->string('tempo');
        // $table->string('auto');
        // $table->integer('minuti');
        // $table->integer('secondi');
        // $table->integer('millesimi');

        'pilota' => $faker->name ,
        'tempo' => '0' ,
        'auto' => $faker->lastname ,
        'minuti' => $faker->numberBetween(1,10) ,
        'secondi' => $faker->numberBetween(0,60),
        'millesimi' => $faker->numberBetween(0,999),

        'gara_id' => function(){
            return Gara::all()->random();
        }

    ];
});
