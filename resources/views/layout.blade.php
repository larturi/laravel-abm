<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <style>
        .active a {
            color: red;
            text-decoration: none
        }
    </style>

    <body>

        <div id="app" class="d-flex flex-column h-screen  justify-content-between">

            <header>
                @include('partials.nav')
                @include('partials.session-status')
            </header>

            <main class="py-4">
                @yield('content')
            </main>

            <footer class="bg-white text-black-50 text-center py-3 shadow">
                {{ config('app.name') }} | 2020
            </footer>


        </div>

    </body>
</html>
