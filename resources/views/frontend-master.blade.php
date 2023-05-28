<!-- Stored in resources/views/layouts/master.blade.php -->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Devs Info - A software Developers Directory for Companies</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css"> --}}
    @vite('resources/css/app.css', 'resources/js/app.js')

</head>

<body class="">
    @include('frontend-header')

    <div class="container">
        @yield('content')
    </div>

    @include('frontend-footer')
    
</body>

</html>
