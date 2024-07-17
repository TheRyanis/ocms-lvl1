<?php

use Illuminate\Support\Facades\Route;
use App\Arrival\Models\Arrival;

Route::prefix('api')->group(function () {
Route::get('arrivals', function () {
return response()->json(Arrival::all());
});

Route::post('arrivals', function (\Illuminate\Http\Request $request) {
$data = $request->only(['name', 'arrival_time']);
$arrival = Arrival::create($data);
return response()->json($arrival, 201);
});
});
