<?php

namespace Database\Factories;

use App\Models\Painting;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Link;
use Faker\Generator as Faker;

class PaintingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Painting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    $factory->define(Painting::class, function(Faker $faker) {

        return [
            'title' => substr($faker->sentence(2), 0, -1),
            'description' => $faker->paragraph,

        ];

    });
}
