<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Garo;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Garo::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'university' => $faker->text,
        'department'=>$faker->word,
        'graduation_year'=>$faker->dateTimeThisMonth,
        'email' => $faker->unique()->safeEmail,
        'phone'=>$faker->phoneNumber,
        'company_name'=>$faker->company,
         'position'=>$faker->name,
        'company_location'=>$faker->address,
    ];
});
