<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
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

$factory->define(Profile::class, function (Faker $faker) {
    return [
    	'image'=>'https://source.unsplash.com/random',
        'name' => $faker->name,
        'department'=>$faker->word,
        'batch_id'=>$faker->text,
        'graduation_year'=>$faker->dateTimeThisMonth,

        'email' => $faker->unique()->safeEmail,
        'phone'=>$faker->phoneNumber,
        'address'=>$faker->address,                                         
       
    ];
});
