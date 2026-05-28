@extends('layout')

@section('content')
<form method="POST" action="/get-diet">
    @csrf
    <label for="goal">Select your goal:</label>
    <select name="goal" id="goal">
        <option value="Weight Loss">Weight Loss</option>
        <option value="Muscle Gain">Muscle Gain</option>
        <option value="Maintain Weight">Maintain Weight</option>
    </select>

    <button type="submit">Get Diet Advice</button>
</form>
@endsection