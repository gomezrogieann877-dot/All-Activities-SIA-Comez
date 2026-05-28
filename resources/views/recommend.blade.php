@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-gray-800">Get Your Diet Recommendation</h1>

<form action="{{ url('/recommend') }}" method="POST" class="bg-white p-6 rounded-xl shadow-md max-w-lg mx-auto space-y-4">
    @csrf
    <div>
        <label class="block text-gray-700">Age</label>
        <input type="number" name="age" class="w-full p-2 border rounded-md" required>
    </div>
    <div>
        <label class="block text-gray-700">Weight (kg)</label>
        <input type="number" name="weight" class="w-full p-2 border rounded-md" required>
    </div>
    <div>
        <label class="block text-gray-700">Height (cm)</label>
        <input type="number" name="height" class="w-full p-2 border rounded-md" required>
    </div>
    <div>
        <label class="block text-gray-700">Activity Level</label>
        <select name="activity" class="w-full p-2 border rounded-md" required>
            <option value="sedentary">Sedentary</option>
            <option value="light">Lightly Active</option>
            <option value="moderate">Moderately Active</option>
            <option value="active">Active</option>
        </select>
    </div>
    <div>
        <label class="block text-gray-700">Diet Preference</label>
        <select name="diet" class="w-full p-2 border rounded-md" required>
            <option value="none">None</option>
            <option value="vegetarian">Vegetarian</option>
            <option value="vegan">Vegan</option>
            <option value="keto">Keto</option>
        </select>
    </div>
    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition">Get Recommendation</button>
</form>
@endsection