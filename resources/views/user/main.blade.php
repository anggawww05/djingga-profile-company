<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Djingga Media Teknokreatif</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="sticky top-0 z-50">
        @include('components.header')
    </div>
    <main>
        @yield('container')
    </main>
    @include('components.footer')
</body>
</html>
