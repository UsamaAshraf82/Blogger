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

$factory->define(App\htc::class, function (Faker $faker) {
    return [

        'name' => 'htc '.$faker->randomLetter.' '.random_int(1,50),
        'new' => $faker->text(600),
        'price' => 'RS. '.random_int(10000,70000),
        'OS' => 'Android '. $faker->randomElement([
                'KitKat 4.4',
                'Lollipop	5.0',
                'Marshmallow    6.0',
                'Nougat	7.0',
                'Oreo	8.0']),
        'Dimensions' => 'N/A',
        'Weight' => rand('100','300').' g',
        'sim' => $faker->randomElement(['Single','Double']),
        'colors' => $faker->randomElement(['Black','White']),
        '2G band'=>'GSM 850 / 900 / 1800 / 1900 ',
        '3G band'=>'HSDPA 850 / 900 / 1900 / 2100 ',
        '4G band'=>'LTE',
        'CPU' => ' ',
        'Chipset'=>' ',
        'GPU'=>' ',
        'Size'=>' ',
        'Protection'=>' ',
        'Built-in'=>' ',
        'Card'=>' ',
        'Main camera'=>' ',
        'Features'=>' ',
        'Front'=>' ',
        'WLAN'=>' ',
        'Bluetooth'=>' ',
        'GPS'=>' ',
        'Radio'=>' ',
        'USB'=>' ',
        'NFC'=>' ',
        'Data'=>' ',
        'Sensors'=>' ',
        'Audio'=>' ',
        'Browser'=>' ',
        'Messaging'=>' ',
        'Games'=>' ',
        'Torch'=>' ',
        'Extra'=>' ',
        'Capacity'=>' ',
        'More'=>' ',
        'img'=>' ',
    ];
});
