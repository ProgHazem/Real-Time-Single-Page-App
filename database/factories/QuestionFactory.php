<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Question;
use App\Model\Category;
use App\User;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [
        'title' => $title,
        'body' => $faker->text,
        'slug' => str_slug($title),
        'category_id' => function () {
            return Category::all()->random();
        },
        'user_id' => function () {
            return User::all()->random();
        },

    ];
});
