<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Message;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Message::class, function (Faker $faker) {
    do {
        $from = rand(1, 30);
        $to = rand(1, 30);
        $is_read = rand(0, 1);
    } while ($from === $to);

    return [
        'sender_id' => $from,
        'receiver_id' => $to,
        'sender_avatar' => 'https://via.placeholder.com/150',
        'receiver_avatar' => 'https://via.placeholder.com/150',
        'message' => $faker->sentence,
        'is_read' => $is_read
    ];
});
