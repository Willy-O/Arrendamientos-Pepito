<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BuildingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Building::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->description,
            'price' => $this->faker->price,
            'address' => $this->faker->address,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'zip' => $this->faker->zip,
            'country' => $this->faker->country,
            'photo' => $this->faker->image
        ];
    }
}
