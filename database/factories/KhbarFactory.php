<?php

use Faker\Generator as Faker;

$factory->define(App\Khbar::class, function (Faker $faker) {
    return [
        'name' =>  str_random(10),
        'title' => str_random(10),
        'partner_id' => '1',
        'subject_id' => '1',
        'topic_id' => '1',
    ];
});
