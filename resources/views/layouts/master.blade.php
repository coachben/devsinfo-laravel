<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devs Info Kenya @yield('title')</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css"> --}}
    @vite('resources/css/app.css')

</head>

<body class="">
    @include('layouts.header')

    <div class="conteiner">
        @yield('content')
    </div>

    @include('layouts.footer')
    
</body>

</html>
