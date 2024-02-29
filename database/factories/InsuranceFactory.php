<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Insurance>
 */
class InsuranceFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'valid_from' => $this->faker->date(),
			'valid_until' => $this->faker->date(),
			'company' => $this->faker->word,
			'cost' => $this->faker->randomFloat(),
			'kilometers' => $this->faker->randomNumber(),
		];
	}
}
