<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{

    public function index()
    {
        $destinations = Destination::all();

        return response()->json([
            'message' => 'All destinations retrieved successfully',
            'data' => $destinations,
        ]);
    }

    public function show(string $id)
    {
        $destination = Destination::find($id);

        if (!$destination) {
            return response()->json(['message' => 'Destination not found'], 404);
        }

        return response()->json([
            'message' => 'Destination found',
            'data' => $destination,
        ]);
    }

    public function showByName(string $name)
    {
        $destination = Destination::where('name', 'LIKE', '%' . $name . '%')->first();

        if (!$destination) {
            return response()->json(['message' => 'Destination not found'], 404);
        }

        return response()->json([
            'message' => 'Destination found',
            'data' => $destination,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'lat' => 'nullable|numeric|between:-90,90',
            'lng' => 'nullable|numeric|between:-180,180',
        ]);

        $destination = Destination::create($validated);

        return response()->json([
            'message' => 'Destination created successfully',
            'data' => $destination,
        ], 201);
    }

    public function update(Request $request, string $id)
    {
        $destination = Destination::find($id);

        if (!$destination) {
            return response()->json(['message' => 'Destination not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string',
            'address' => 'sometimes|nullable|string|max:255',
            'lat' => 'sometimes|nullable|numeric|between:-90,90',
            'lng' => 'sometimes|nullable|numeric|between:-180,180',
        ]);

        $destination->update($validated);

        return response()->json([
            'message' => 'Destination updated successfully',
            'data' => $destination,
        ]);
    }


    public function destroy(string $id)
    {
        $destination = Destination::find($id);

        if (!$destination) {
            return response()->json(['message' => 'Destination not found'], 404);
        }

        $destination->delete();

        return response()->json([
            'message' => 'Destination deleted successfully',
        ]);
    }

}
