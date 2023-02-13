<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        @yield('styles')

    </head>
    <body class="font-sans antialiased">
        <div class="w-full h-[100vh]">
            @yield('contents')
        </div>

        <script src="{{ asset('assets/js/app.js') }}"> </script>
        <script src="{{ asset('assets/js/script.js') }}"> </script>

        @yield('scripts')
    </body>
</html>
