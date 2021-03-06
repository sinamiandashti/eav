<?php

use Faker\Generator;
use Eav\AttributeSet;

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

$factory->define(AttributeSet::class, function (Generator $faker) {
    return [
        'attribute_set_name' => 'Default',
        'entity_id' => null,
    ];
});