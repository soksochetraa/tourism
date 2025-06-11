<?php

namespace App\Http\Controllers;

use App\Models\EventDestination;
use Illuminate\Http\Request;

class EventDestinationController extends Controller
{
    public function index()
    {
        $event_destination = EventDestination::all();

        return response()->json([
            'message' => 'All event destinations retrieved successfully',
            'data' => $event_destination,
        ]);
    }

    public function show(string $id)
    {
        $event_destination = EventDestination::find($id);

        if (!$event_destination) {
            return response()->json(['message' => 'Event destination not found'], 404);
        }

        return response()->json([
            'message' => 'Event destination found',
            'data' => $event_destination,
        ]);
    }

    public function showByEventName(string $eventName)
    {
        $eventDestinations = EventDestination::whereHas('event', function ($query) use ($eventName) {
            $query->where('name', 'LIKE', '%' . $eventName . '%');
        })->with('destination', 'event')->get();

        if ($eventDestinations->isEmpty()) {
            return response()->json(['message' => 'No matching event destinations found'], 404);
        }

        return response()->json([
            'message' => 'Event destinations found',
            'data' => $eventDestinations,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id',
            'destination_id' => 'required|exists:destinations,id',
        ]);

        $event_destination = EventDestination::create($validated);

        return response()->json([
            'message' => 'Event destination created successfully',
            'data' => $event_destination,
        ], 201);
    }

    public function update(Request $request, string $id)
    {
        $event_destination = EventDestination::find($id);

        if (!$event_destination) {
            return response()->json(['message' => 'Event destination not found'], 404);
        }

        $validated = $request->validate([
            'event_id' => 'sometimes|required|exists:events,id',
            'destination_id' => 'sometimes|required|exists:destinations,id',
        ]);

        $event_destination->update($validated);

        return response()->json([
            'message' => 'Event destination updated successfully',
            'data' => $event_destination,
        ]);
    }

    public function destroy(string $id)
    {
        $event_destination = EventDestination::find($id);

        if (!$event_destination) {
            return response()->json(['message' => 'Event destination not found'], 404);
        }

        $event_destination->delete();

        return response()->json(['message' => 'Event destination deleted successfully']);
    }
}
