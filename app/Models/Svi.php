<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Svi extends Model
{
	use HasFactory;

	protected $fillable = [
		'vehicle_id',
		'date',
		'valid_from',
		'valid_until',
		'cost',
		'kilometers',
	];

	public function vehicle()
	{
		return $this->belongsTo(Vehicle::class);
	}
}
