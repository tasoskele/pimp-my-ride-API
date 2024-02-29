<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Insurance;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInsuranceRequest;
use App\Http\Requests\UpdateInsuranceRequest;

class InsuranceController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Vehicle $vehicle)
	{
		return response()->json($vehicle->insurances, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreInsuranceRequest $request, Vehicle $vehicle)
	{
		$insurance = $vehicle->insurances()->create([
			'valid_from' => $request->valid_from,
			'valid_until' => $request->valid_until,
			'company' => $request->company,
			'cost' => $request->cost,
			'kilometers' => $request->kilometers
		]);

		return response()->json($insurance, 201);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Vehicle $vehicle, Insurance $insurance)
	{
		return response()->json($insurance, 200);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateInsuranceRequest $request, Vehicle $vehicle, Insurance $insurance)
	{
		$insurance->update([
			'valid_from' => $request->valid_from,
			'valid_until' => $request->valid_until,
			'company' => $request->company,
			'cost' => $request->cost,
			'kilometers' => $request->kilometers
		]);

		return response()->json($insurance, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Vehicle $vehicle, Insurance $insurance)
	{
		$insurance->delete();

		return response()->json('OK', 204);
	}
}
