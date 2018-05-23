<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();

        return response()->json($cars, 201);
    }

    public function store(CarRequest $request)
    {
        $car = Car::create($request->all());

        return response()->json($car, 201);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);

        return response()->json($car);
    }

    public function update(CarRequest $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());

        return response()->json($car, 200);
    }

    public function destroy($id)
    {
        Car::destroy($id);

        return response()->json(null, 204);
    }
}