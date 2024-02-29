<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
	use HasFactory;

	protected $fillable = [
		'vehicle_id',
		'valid_from',
		'valid_until',
		'company',
		'cost',
		'kilometers'
	];

	public function vehicle()
	{
		return $this->belongsTo(Vehicle::class);
	}
}
