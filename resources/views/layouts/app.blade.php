<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Style -->
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/checklist.css">

    @hasSection('welcome')
        <link rel="stylesheet" href="./css/welcome.css">
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 mb-5">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            <section class="m-0 sec-welcome">
                @yield('welcome')
            </section>
            <section class="m-1">
                @yield('newList')
            </section>
            <section class="m-1 checklists">
                @yield('content')
            </section>
            @if (isset($slot))
                {{ $slot }}
            @endif
        </main>
    </div>

    @if (session('status'))
        <div class="alert alert-success position-fixed end-0 bottom-0 m-2">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger position-fixed end-0 bottom-0 m-2">
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </div>
    @endif

    @hasSection('welcome')
        <footer class="d-flex justify-content-center align-items-center m-0 mt-5"
            style="height: 150px; background-color: rgb(var(--quin-c));">
            Made with  ❤️
        </footer>
    @else
        <footer class="mt-5 mb-0">
            <div class="my-4 text-end mx-2">
                <span class="mt-5" style="color: #e4c413;"> Made with
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>

                </span>

            </div>
        </footer>
    @endif
</body>

</html>
