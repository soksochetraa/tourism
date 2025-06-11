<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProvinceDestination;

class ProvinceDestinationController extends Controller
{
    public function index()
    {
        $province_destination = ProvinceDestination::all();

        return response()->json([
            'message' => 'All Destinations retrieved successfully',
            'data' => $province_destination,
        ]);
    }

    public function show(string $id)
    {
        $province_destination = ProvinceDestination::find($id);

        if (!$province_destination) {
            return response()->json(['message' => 'Destination not found'], 404);
        }

        return response()->json([
            'message' => 'Destination found',
            'data' => $province_destination,
        ]);
    }

    public function showByProvinceName(string $provinceName)
    {
        $ProvinceDestinations = ProvinceDestination::whereHas('province', function ($query) use ($provinceName) {
            $query->where('name', 'LIKE', '%' . $provinceName . '%');
        })
        ->with(['destination', 'province']) // Load both destination and province
        ->get();

        if ($ProvinceDestinations->isEmpty()) {
            return response()->json(['message' => 'No matching Destinations found'], 404);
        }

        return response()->json([
            'message' => 'Destinations found',
            'data' => $ProvinceDestinations,
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id',
            'destination_id' => 'required|exists:destinations,id',
        ]);

        $province_destination = ProvinceDestination::create($validated);

        return response()->json([
            'message' => 'Destination created successfully',
            'data' => $province_destination,
        ], 201);
    }

    public function update(Request $request, string $id)
    {
        $province_destination = ProvinceDestination::find($id);

        if (!$province_destination) {
            return response()->json(['message' => 'Destination not found'], 404);
        }

        $validated = $request->validate([
            'event_id' => 'sometimes|required|exists:events,id',
            'destination_id' => 'sometimes|required|exists:destinations,id',
        ]);

        $province_destination->update($validated);

        return response()->json([
            'message' => 'Destination updated successfully',
            'data' => $province_destination,
        ]);
    }

    public function destroy(string $id)
    {
        $province_destination = ProvinceDestination::find($id);

        if (!$province_destination) {
            return response()->json(['message' => 'Destination not found'], 404);
        }

        $province_destination->delete();

        return response()->json(['message' => 'Destination deleted successfully']);
    }
}
