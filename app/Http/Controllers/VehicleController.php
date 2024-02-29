<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;

class VehicleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		// TODO: Make sure to respond only with the vehicle of the user
		return response()->json(Vehicle::all());
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreVehicleRequest $request)
	{
		$vehicle = Vehicle::create([
			'user_id' => $request->user_id,
			'make' => $request->make,
			'model' => $request->model,
			'year' => $request->year,
			'plate_number' => $request->plate_number,
			'fuel_type' => $request->fuel_type,
		]);

		return response()->json($vehicle, 201);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Vehicle $vehicle)
	{
		return response()->json($vehicle);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
	{
		$vehicle->update([
			'user_id' => $request->user_id,
			'make' => $request->make,
			'model' => $request->model,
			'year' => $request->year,
			'plate_number' => $request->plate_number,
			'fuel_type' => $request->fuel_type,
		]);

		return response()->json($vehicle, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Vehicle $vehicle)
	{
		$vehicle->delete();

		return response()->json('OK', 204);
	}
}
