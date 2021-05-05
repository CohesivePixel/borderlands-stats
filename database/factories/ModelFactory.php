<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\System::class, function (Faker\Generator $faker) {
    return [
        'system_name' => $faker->lastName,
        'system_star_class' => str_random(2),
        'system_industry_type' => $faker->domainWord,
        'system_current_order_id' => rand(1, 6),
    ];
});

$factory->define(App\Faction::class, function (Faker\Generator $faker) {
    return [
        'faction_name' => $faker->streetName,
        'faction_pending_state' => str_random(10),
        'faction_current_state' => str_random(10),
        'faction_recovering_state' => str_random(10),
        'faction_home_system_id' => $faker->randomElement(App\System::lists('system_id')->toArray())
    ];
});

$factory->define(App\FSData::class, function (Faker\Generator $faker) {
    return [
        'fsd_system_id' => $faker->randomElement(App\System::lists('system_id')->toArray()),
        'fsd_contains_faction_name' => $faker->randomElement(App\Faction::lists('faction_name')->toArray()),
        'fsd_faction_influence' => rand(0, 100),
        'fsd_faction_previous_influence' => rand(0, 100)
    ];
});