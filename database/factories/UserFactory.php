<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Isapre::class, function (Faker $faker) {
  
    return [
        'name_isapre' => $faker->name,
    ];
});

$factory->define(App\Models\Seller::class, function (Faker $faker) {
  
    return [
        'rut_seller' => $faker->name,
        'name_seller' => $faker->name,
        'lastname_seller' => $faker->name,
        'smartphone_seller' => $faker->phoneNumber ,
        'phone_seller' => $faker->phoneNumber,
        'email_seller' => $faker->email,
        'id_isapre' => $faker->str_random(10),

    ];
});
