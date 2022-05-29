<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    public function index() {
        $cars = Car::all();

        return view('cars', compact('cars'));
    }

    public function show(Car $car) {
        return view('car', compact('car'));
    }
}
