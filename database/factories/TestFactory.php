<?php

namespace Database\Factories;

use App\Models\Value;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Value::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->email,
            'url' => $this->faker->url,
            'gender' => $this->faker->randomElement(['0', '1']),
        ];
    }
}
