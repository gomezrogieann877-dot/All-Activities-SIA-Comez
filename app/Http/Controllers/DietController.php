<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DietController extends Controller
{
    public function index()
    {
        return view('diet');
    }

    public function recommend(Request $request)
{
    $age = $request->age;
    $weight = $request->weight;

    if ($weight < 50) {
        $diet = "High-calorie diet (rice, meat, milk)";
    } elseif ($weight > 80) {
        $diet = "Low-calorie diet (vegetables, fruits)";
    } else {
        $diet = "Balanced diet (protein, carbs, vegetables)";
    }

    return view('diet', compact('diet'));
} 
}
