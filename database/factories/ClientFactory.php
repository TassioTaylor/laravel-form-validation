<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

require_once __DIR__ . '/../faker_data/document_number.php' ;

$factory->define(Client::class, function (Faker $faker) {
    $cpfs = cpfs();
    return [
        'name' => $faker->name,

        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'defaulter' => rand(0, 1),

    ];
});

$factory->state(Client::class,Client::TYPE_INDIVIDUAL, function (Faker $faker){
    $cpfs = cpfs();
    return [
        'document_number' => $cpfs[array_rand($cpfs, 1)],
        'date_birth' => $faker->date(),
        'sex' => rand(1, 10) % 2 == 0 ? 'm' : 'f',
        'marital_status' => rand(1, 3),
        'physical_disability' => rand(1, 10) % 2 == 0 ? $faker->word : null,
        'client_type' => Client::TYPE_INDIVIDUAL,

    ];
});

$factory->state(Client::class,Client::TYPE_LEGAL, function (Faker $faker){
    $cnpjs = cnpjs();
    return [
        'company_name' => $faker->company,
        'document_number' => $cnpjs[array_rand($cnpjs, 1)],
        'client_type' => Client::TYPE_LEGAL,
    ];
});



/*
           $table->string('name');
            $table->string('document_number');
            $table->string('email');
            $table->string('phone');
            $table->boolean('defaulter');//inadiplente
            $table->date('date_birth');
            $table->char('sex',10);
            $table->enum('marital_status', array_keys(\App\Client::MARITAL_STATUS));
            $table->string('physical_disability')->nullable(); */