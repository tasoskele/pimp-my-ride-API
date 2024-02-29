<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
	use HasFactory;

	protected $fillable = [
		'user_id',
		'make',
		'model',
		'year',
		'plate_number',
		'fuel_type'
	];

	public function insurances()
	{
		return $this->hasMany(Insurance::class);
	}

	public function svis()
	{
		return $this->hasMany(Svi::class);
	}

	public function services()
	{
		return $this->hasMany(Service::class);
	}
}
