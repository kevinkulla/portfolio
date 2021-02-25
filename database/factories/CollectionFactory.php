<?php

namespace Database\Factories;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Link;
use Faker\Generator as Faker;

class CollectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Collection::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    $factory->define(Collection::class, function(Faker $faker) {

        return [
            'title' => substr($faker->sentence(2), 0, -1),
            'description' => $faker->paragraph,
        ];

    });
}
