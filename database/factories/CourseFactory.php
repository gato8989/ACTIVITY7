<?php

use Faker\Generator as Faker;
use App\Models\Course;
use App\Models\RoboticsKit;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'course_key' => 'Rob' . $faker->unique()->numberBetween(100, 999),
        'course_name' => $faker->sentence(3),
        'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()->id,
    ];
});