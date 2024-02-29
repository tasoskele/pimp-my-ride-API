<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'user_id' => $this->faker->unique()->numberBetween(1, 10),
			'make' => $this->faker->word,
			'model' => $this->faker->word,
			'year' => $this->faker->year,
			'plate_number' => $this->faker->word,
			'fuel_type' => $this->faker->word,
		];
	}
}
