<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Vehicle $vehicle)
	{
		return response()->json($vehicle->services, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreServiceRequest $request, Vehicle $vehicle)
	{
		$service = $vehicle->services()->create([
			'details' => $request->details,
			'type' => $request->type,
			'date' => $request->date,
			'kilometers' => $request->kilometers,
			'cost' => $request->cost,
			'shop' => $request->shop
		]);

		return response()->json($service, 201);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Vehicle $vehicle, Service $service)
	{
		return response()->json($service, 200);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateServiceRequest $request, Vehicle $vehicle, Service $service)
	{
		$service->update([
			'details' => $request->details,
			'type' => $request->type,
			'date' => $request->date,
			'kilometers' => $request->kilometers,
			'cost' => $request->cost,
			'shop' => $request->shop
		]);

		return response()->json($service, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Vehicle $vehicle, Service $service)
	{
		$service->delete();

		return response()->json('OK', 204);
	}
}