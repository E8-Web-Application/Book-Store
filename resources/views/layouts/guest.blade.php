<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
              integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        @yield('styles')

    </head>
    <body class="bag-body font-sans text-gray-900 antialiased">
        <div class="bag-body min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#F4F3F3]">
            <div>
                <a href="/">
                    <h1 class="uppercase text-2xl text-[#E9855A] font-black"
                        style="font-size: 26px">@yield('header_title')</h1>
                </a>
            </div>

            <div class="bg-white w-full sm:max-w-lg shadow-xl p-6 mt-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <script src="{{ asset('assets/js/app.js') }}"> </script>
        <script src="{{ asset('assets/js/script.js') }}"> </script>
        @yield('scripts')
        <script>
            function showPassword() {
                var x = document.getElementById("password");

                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }

            function showConfirmPassword() {
                var y = document.getElementById("password_confirmation");

                if (y.type === "password") {
                    y.type = "text";
                } else {
                    y.type = "password";
                }
            }
        </script>
    </body>
</html>
