<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindful Bite Diet System</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50 font-roboto">

    {{-- Navbar --}}
    <nav class="bg-green-600 text-white p-4 shadow-md flex justify-between items-center">
        <div class="font-bold text-xl">Mindful Bite</div>
        <div class="space-x-4">
            <a href="{{ url('/') }}" class="hover:underline">Home</a>
            <a href="{{ url('/recommend') }}" class="hover:underline">Recommend</a>
            <a href="{{ url('/history') }}" class="hover:underline">History</a>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="container mx-auto mt-8 px-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-green-100 text-gray-700 mt-12 p-4 text-center">
        &copy; {{ date('Y') }} Mindful Bite. All rights reserved.
    </footer>

</body>
</html>