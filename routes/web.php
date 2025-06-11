<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventDestinationController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ProvinceDestinationController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Everyone can read
Route::get('/destinations', [DestinationController::class, 'index']);
Route::get('/destinations/{id}', [DestinationController::class, 'show']);
Route::get('/destinations/name/{name}', [DestinationController::class, 'showByName']);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/events/name/{name}', [EventController::class, 'showByName']);

Route::get('/eventdestination', [EventDestinationController::class, 'index']);
Route::get('/eventdestination/{id}', [EventDestinationController::class, 'show']);
Route::get('/eventdestination/event/{eventName}', [EventDestinationController::class, 'showByEventName']);

Route::get('/provinces', [ProvinceController::class, 'index']);
Route::get('/provinces/{id}', [ProvinceController::class, 'show']);
Route::get('/provinces/name/{name}', [ProvinceController::class, 'showByName']);

Route::get('/provincedestination', [ProvinceDestinationController::class, 'index']);
Route::get('/provincedestination/{id}', [ProvinceDestinationController::class, 'show']);
Route::get('/provincedestination/province/{provinceName}', [ProvinceDestinationController::class, 'showByProvinceName']);

Route::middleware('jwt.auth')->group(function () {
    Route::get('/user', function () {
        return response()->json(auth()->user());
    });

    // Only admin can create, update, delete
    Route::middleware('admin')->group(function () {

        //Destination
        Route::post('/destinations', [DestinationController::class, 'store']);
        Route::patch('/destinations/{id}', [DestinationController::class, 'update']);
        Route::delete('/destinations/{id}', [DestinationController::class, 'destroy']);

        //Event
        Route::post('/events', [EventController::class, 'store']);
        Route::patch('/events/{id}', [EventController::class, 'update']);
        Route::delete('/events/{id}', [EventController::class, 'destroy']);

        //EventDestination
        Route::post('/eventdestination', [EventDestinationController::class, 'store']);
        Route::patch('/eventdestination/{id}', [EventDestinationController::class, 'update']);  
        Route::delete('/eventdestination/{id}', [EventDestinationController::class, 'destroy']);

        //Province
        Route::post('/provinces', [ProvinceController::class, 'store']);
        Route::patch('/provinces/{id}', [ProvinceController::class, 'update']); 
        Route::delete('/provinces/{id}', [ProvinceController::class, 'destroy']);

        //ProvinceDestination
        Route::post('/provincedestination', [ProvinceDestinationController::class, 'store']);
        Route::patch('/provincedestination/{id}', [ProvinceDestinationController::class, 'update']);
        Route::delete('/provincedestination/{id}', [ProvinceDestinationController::class, 'destroy']);   

    });
});
