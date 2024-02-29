<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;
use App\Models\Insurance;
use App\Models\Service;
use App\Models\Svi;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
	public function run(): void
	{
		User::factory(10)->create();
		Vehicle::factory(5)
			->has(Insurance::factory()->count(5))
			->has(Service::factory()->count(5))
			->has(Svi::factory()->count(5))
			->create();
	}
}
