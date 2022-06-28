<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'des' => $faker->text,
        'thum' => $faker->imageUrl(283,241),
        'images' => json_encode([$faker->imageUrl(283,241),$faker->imageUrl(283,241)]),
        'sku' => $faker->ean8,
        'price' => $faker->randomFloat,
        'category_id' => $faker->numberBetween(1,10),
        'supplier_id' => $faker->numberBetween(1,10),
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'subcategories' => json_encode([$faker->name, $faker->name]),
    ];
});

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'details' => json_encode([$faker->address, $faker->imageUrl(283,241)]),
    ];
});