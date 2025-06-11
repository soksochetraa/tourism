<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function index()
    {
        $provinces = Province::all();

        return response()->json([
            'message' => 'All provinces retrieved successfully',
            'data' => $provinces,
        ]);
    }

    public function show(string $id)
    {
        $province = Province::find($id);

        if (!$province) {
            return response()->json(['message' => 'Province not found'], 404);
        }

        return response()->json([
            'message' => 'Province found',
            'data' => $province,
        ]);
    }

    public function showByName(string $name)
    {
        $province = Province::where('name', 'LIKE', '%' . $name . '%')->first();

        if (!$province) {
            return response()->json(['message' => 'Province not found'], 404);
        }

        return response()->json([
            'message' => 'Province found',
            'data' => $province,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
        ]);

        $province = Province::create($validated);

        return response()->json([
            'message' => 'Province created successfully',
            'data' => $province,
        ], 201);
    }

    public function update(Request $request, string $id)
    {
        $province = Province::find($id);

        if (!$province) {
            return response()->json(['message' => 'Province not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'country_id' => 'sometimes|required|exists:countries,id',
        ]);

        $province->update($validated);

        return response()->json([
            'message' => 'Province updated successfully',
            'data' => $province,
        ]);
    }

    public function destroy(string $id)
    {
        $province = Province::find($id);

        if (!$province) {
            return response()->json(['message' => 'Province not found'], 404);
        }

        $province->delete();

        return response()->json([
            'message' => 'Province deleted successfully',
        ]);
    }
}
