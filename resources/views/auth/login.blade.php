<x-guest-layout>
    @section('title', 'Login')
    @section('header_title', 'Login Account')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="">
            <div class="relative">
                <input class="w-full rounded-r-full tw-rounded-l-full placeholder-[#E9855A] text-[#E9855A] border-gray-300
                        dark:border-[#E9855A]
                        focus:border-indigo-500 dark:focus:border-indigo-600
                        focus:ring-indigo-500 dark:focus:ring-indigo-600
                        rounded-md shadow-sm py-3 px-12 bg-transparent flex justify-between items-center"
                       type="email"
                       name="email"
                       :value="old('email')"
                       id="email"
                       placeholder="Email"
                       required autofocus autocomplete="username"
                >
                <i class="fa-solid fa-envelope text-base flex items-center absolute right-0 py-2 px-4 top-0 bottom-0 text-[#E9855A]"></i>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-8">
            <div class="relative">
                <input class="w-full rounded-r-full tw-rounded-l-full placeholder-[#E9855A] text-[#E9855A] border-gray-300
                        dark:border-[#E9855A]
                        focus:border-indigo-500 dark:focus:border-indigo-600
                        focus:ring-indigo-500 dark:focus:ring-indigo-600
                        rounded-md shadow-sm py-3 px-12 bg-transparent flex justify-between items-center"
                       type="password"
                       name="password"
                       :value="old('password')"
                       id="password"
                       placeholder="Password"
                       required autocomplete="current-password">
                <i onclick="showPassword()"
                   class="fa-solid fa-eye-slash text-base flex items-center absolute right-0 py-2 px-4 top-0 bottom-0 text-[#E9855A]"></i>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-between mt-4">
            <div class="">
                <a href="{{route('register')}}" class="text-[#E9855A] text-sm hover:text-[#E95A1D] font-bold">
                    {{ __('Register Account') }}
                </a>
            </div>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-[#E9855A] hover:text-[#E9855A] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="flex items-center">
            <x-submit-button>
                {{ __('Login') }}
            </x-submit-button>
        </div>
    </form>
    @section('scripts')
        <script>
            function showPassword() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    @endsection
</x-guest-layout>
