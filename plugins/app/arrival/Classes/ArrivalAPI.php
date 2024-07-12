<?php namespace App\Arrival\Classes;

use App\Arrival\Models\Arrival;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ArrivalAPI extends Controller
{
    public function getArrivals()
    {
        return response()->json(Arrival::all());
    }

    public function createArrival(Request $request)
    {
        $data = $request->only(['name', 'arrival_time']);
        $arrival = Arrival::create($data);
        return response()->json($arrival, 201);
    }
}
