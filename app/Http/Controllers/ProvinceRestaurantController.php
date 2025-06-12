<?php

namespace App\Http\Controllers;

use App\Models\ProvinceRestaurant;
use Illuminate\Http\Request;

class ProvinceRestaurantController extends Controller
{
    public function index()
    {
        $province_restaurant = ProvinceRestaurant::with('province', 'restaurant')->get();

        return response()->json([
            'message' => 'All province-restaurant relations retrieved successfully',
            'data' => $province_restaurant,
        ]);
    }

    public function show(string $id)
    {
        $province_restaurant = ProvinceRestaurant::with('province', 'restaurant')->find($id);

        if (!$province_restaurant) {
            return response()->json(['message' => 'Province-restaurant relation not found'], 404);
        }

        return response()->json([
            'message' => 'Province-restaurant relation found',
            'data' => $province_restaurant,
        ]);
    }

    public function showByRestaurantName(string $restaurantName)
    {
        $relations = ProvinceRestaurant::whereHas('restaurant', function ($query) use ($restaurantName) {
            $query->where('name', 'LIKE', '%' . $restaurantName . '%');
        })->with('province', 'restaurant')->get();

        if ($relations->isEmpty()) {
            return response()->json(['message' => 'No matching relations found'], 404);
        }

        return response()->json([
            'message' => 'Matching province-restaurant relations found',
            'data' => $relations,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'province_id' => 'required|exists:provinces,id',
            'restaurant_id' => 'required|exists:restaurants,id',
        ]);

        $province_restaurant = ProvinceRestaurant::create($validated);

        return response()->json([
            'message' => 'Province-restaurant relation created successfully',
            'data' => $province_restaurant,
        ], 201);
    }

    public function update(Request $request, string $id)
    {
        $province_restaurant = ProvinceRestaurant::find($id);

        if (!$province_restaurant) {
            return response()->json(['message' => 'Province-restaurant relation not found'], 404);
        }

        $validated = $request->validate([
            'province_id' => 'sometimes|required|exists:provinces,id',
            'restaurant_id' => 'sometimes|required|exists:restaurants,id',
        ]);

        $province_restaurant->update($validated);

        return response()->json([
            'message' => 'Province-restaurant relation updated successfully',
            'data' => $province_restaurant,
        ]);
    }

    public function destroy(string $id)
    {
        $province_restaurant = ProvinceRestaurant::find($id);

        if (!$province_restaurant) {
            return response()->json(['message' => 'Province-restaurant relation not found'], 404);
        }

        $province_restaurant->delete();

        return response()->json(['message' => 'Province-restaurant relation deleted successfully']);
    }
}
