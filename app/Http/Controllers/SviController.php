<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Svi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSviRequest;
use App\Http\Requests\UpdateSviRequest;

class SviController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Vehicle $vehicle)
	{
		return response()->json($vehicle->svis, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreSviRequest $request, Vehicle $vehicle)
	{
		$svi = $vehicle->svis()->create([
			'date' => $request->date,
			'valid_from' => $request->valid_from,
			'valid_until' => $request->valid_until,
			'cost' => $request->cost,
			'kilometers' => $request->kilometers,
		]);

		return response()->json($svi, 201);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Vehicle $vehicle, Svi $svi)
	{
		return response()->json($svi, 200);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateSviRequest $request, Vehicle $vehicle, Svi $svi)
	{
		$svi->update([
			'date' => $request->date,
			'valid_from' => $request->valid_from,
			'valid_until' => $request->valid_until,
			'cost' => $request->cost,
			'kilometers' => $request->kilometers
		]);

		return response()->json($svi, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Vehicle $vehicle, Svi $svi)
	{
		$svi->delete();

		return response()->json('OK', 204);
	}
}