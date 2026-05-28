@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-gray-800">Your Daily Suggestions</h1>

<div class="grid md:grid-cols-3 gap-6">
    @foreach ($meals as $meal)
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
        <img src="{{ $meal['image'] }}" alt="{{ $meal['name'] }}" class="w-full h-40 object-cover">
        <div class="p-4">
            <h2 class="text-xl font-semibold">{{ $meal['name'] }}</h2>
            <p class="text-gray-600 mt-1">Calories: {{ $meal['calories'] }} kcal</p>
            <p class="text-gray-500 text-sm mt-2">{{ $meal['description'] }}</p>
        </div>
    </div>
    @endforeach
</div>

{{-- Daily Tip --}}
<div class="mt-10 bg-orange-100 p-6 rounded-xl shadow-inner">
    <h2 class="font-bold text-lg">💡 Daily Health Tip</h2>
    <p class="mt-2">{{ $dailyTip }}</p>
</div>
@endsection