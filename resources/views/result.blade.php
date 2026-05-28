@extends('layout')

@section('content')
<div class="diet-card">
    <i class="fas fa-leaf fa-2x"></i>
    <h2>Recommended Diet</h2>
    <p>{{ $diet }}</p>
    <a href="{{ route('diet.index') }}">
        <button type="button"><i class="fas fa-arrow-left"></i> Back</button>
    </a>
</div>
@endsection