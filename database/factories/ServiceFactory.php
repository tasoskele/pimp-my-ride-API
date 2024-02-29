<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'details' => $this->faker->word,
			'type' => $this->faker->randomElement(['minor', 'major', 'emergency']),
			'date' => $this->faker->date(),
			'kilometers' => $this->faker->randomNumber(),
			'cost' => $this->faker->randomFloat(),
			'shop' => $this->faker->word,
		];
	}
}
