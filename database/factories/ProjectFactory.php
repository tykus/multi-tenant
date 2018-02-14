<?php

use App\Company;
use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'company_id' => factory(Company::class)->create()->id,
        'name' => $faker->word
    ];
});
