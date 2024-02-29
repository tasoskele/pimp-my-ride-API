<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	use HasFactory;

	protected $fillable = [
		'vehicle_id',
		'details',
		'type',
		'date',
		'kilometers',
		'cost',
		'shop',
	];

	public function vehicle()
	{
		return $this->belongsTo(Vehicle::class);
	}
}
