<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'CleanLodge')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/connex.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="page-wrapper">

            <!-- Logo -->
            <header class="div-logo">
                <a href="/" class="logo-text"><span style="color:white;">Clean</span><span style="color:#81c3d7;">Lodge</span></a>
            </header>

            <!-- Form content -->
            <main class="content @yield('content-class')">

                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="footer">
                <p>&copy; {{ date('Y') }} CleanLodge. Tous droits réservés.</p>
            </footer>
        </div>
    </body>
</html>
