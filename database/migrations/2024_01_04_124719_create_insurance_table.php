<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('insurances', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('vehicle_id');
			$table->date('valid_from');
			$table->date('valid_until');
			$table->string('company');
			$table->decimal('cost', 10, 2);
			$table->integer('kilometers');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('insurances');
	}
};
