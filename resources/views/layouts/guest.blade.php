<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="./css/geral.css">
    <link rel="stylesheet" href="./css/navbar.css">

    @hasSection('welcome')
        <link rel="stylesheet" href="./css/welcome.css">
    @endif
    <!-- Scripts -->
</head>

<body class="font-sans text-gray-900" style="background-color: rgb(var(--dark-c));">
    @if (isset($slot))
        <div class="d-flex flex-column justify-content-center align-items-center py-5">
            <div>
                <a href="/">
                    <x-application-logo class="w-25 h-25" />
                </a>
            </div>

            <div class="w-50 m-5 px-5 py-4 shadow-md overflow-hidden rounded-3 "
                style="background-color: rgba(var(--quin-c), .75); color: rgb(var(--light-c))">
                {{ $slot }}
            </div>
        </div>
    @else
        <main>
            <section class="m-0 sec-welcome">
                @yield('welcome')
            </section>
        </main>
    @endif
</body>

</html>
