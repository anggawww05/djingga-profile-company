<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Djingga Media Teknokreatif</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="flex">
        {{-- Sidebar fixed on the left from top to bottom --}}
        @include('components.sidebar')

        {{-- Right column: topbar at top, content below, shifted by sidebar width on large screens --}}
        <div class="flex-1 min-h-screen">
            @include('components.topbar')
            <main class="p-6">
                @yield('container')
            </main>
        </div>
    </div>

    {{-- @include('components.footer') --}}
</body>
</html>
