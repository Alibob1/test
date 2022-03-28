<?php

namespace App\Http\Controllers;

use App\Models\Transportation;
use Illuminate\Http\Request;

class TransportationController extends Controller
{
    public function index(Request $request)
    {
        $transportations = $request->user()->transportations()->get();

        return view('dashboard', [
            'transportations' => $transportations
        ]);
    }

    public function transportation(Request $request)
    {
        //$distance = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?destinations=" . $request->input('station_a') . "&origins=" . $request->input('station_b') . "&key=AIzaSyDxczA6T86uhMRV4W30sLOwZd78-2Hmodw");

        $distance = 100;
        $price = $request->input('weight') * $distance * 10;
        $transportation = Transportation::create([
            'user_id' => $request->user()->id,
            'station_a' => $request->input('station_a'),
            'station_b' => $request->input('station_b'),
            'weight' => $request->input('weight'),
            'price' => $price
        ]);


        return redirect('/dashboard');
    }
}
