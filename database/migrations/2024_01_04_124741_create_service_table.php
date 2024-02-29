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
		Schema::create('services', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('vehicle_id');
			$table->text('details');
			$table->enum('type', ['minor', 'major', 'emergency']);
			$table->date('date');
			$table->integer('kilometers');
			$table->decimal('cost', 10, 2);
			$table->string('shop');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('services');
	}
};
