<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Svi>
 */
class SviFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'date' => $this->faker->date(),
			'valid_from' => $this->faker->date(),
			'valid_until' => $this->faker->date(),
			'cost' => $this->faker->randomFloat(),
			'kilometers' => $this->faker->randomNumber(),
		];
	}
}
