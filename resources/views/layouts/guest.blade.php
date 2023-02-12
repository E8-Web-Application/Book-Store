<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{$title}}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="{{asset('build/assets/app-5369315b.css')}}">

    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#F4F3F3]">
            <div>
                <a href="/">
                    <h1 class="text-red-600 uppercase text-2xl text-[#E9855A] font-black" style="font-size: 30px"> {{ $header_title }}</h1>
                </a>
            </div>

            <div class="w-full sm:max-w-lg shadow-md p-6 mt-6 py-4 overflow-hidden sm:rounded-lg"
{{--                 style="background-color: #EEDEDE"--}}
            >
                {{ $slot }}
            </div>
        </div>
    <script src="{{ asset('build/assets/app-1736b1f2.js') }}"> </script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </body>
</html>
