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
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'address' => $this->faker->address,
            'state' => $this->faker->countryCode,
            'city' => $this->faker->name,
            'zip' => $this->faker->randomNumber(5),
            'country' => $this->faker->countryCode,
            'photo' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}
