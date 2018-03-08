<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Gara::class, function (Faker $faker) {

    
    // $faker->addProvider(new Faker\Provider\Internet($faker));
    // $faker->addProvider(new Faker\Provider\DateTime($faker));
    // $faker->addProvider(new Faker\Provider\it_IT\Address($faker));
    // $faker->addProvider(new Faker\Provider\it_IT\Lorem($faker));

    return [
        //$table->string('nome');
        // $table->string('stato');
        // $table->string('url');
        // $table->integer('lunghezza');
        
        // $table->string('club');
        // $table->string('campionato');
        // $table->date('dataqualifiche');
        // $table->date('datagara');
        

        // $table->string('auto');
        // $table->string('meteo');

        
        'nome' => $faker->word,
        'auto' => $faker->word,
        'stato' => $faker->country,
        'meteo' => $faker->word,
        'url' => $faker->url,
        'note' => $faker->text,
        'lunghezza' => $faker->numberBetween(1200,7000),
        'giri' => $faker->numberBetween(5,25),
        'club' => $faker->word,
        'campionato' => $faker->word,
        'dataqualifiche' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 year', $timezone = null) ,
        'datagara' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 year', $timezone = null) 
    ];
});
