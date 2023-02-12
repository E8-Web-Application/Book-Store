<x-guest-layout>
    @section('title', 'Register')
    @section('header_title', 'Register Account')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <div class="relative">
                <input class="w-full rounded-r-full tw-rounded-l-full placeholder-[#E9855A] text-[#E9855A] border-gray-300
                        active:border-[#E9855A]
                        border-2 border-orange-700
                        dark:border dark:border-2 dark:border-orange-700
                        active:border active:border-2 active:border-orange-700
                        rounded-md shadow-sm py-3 px-12 bg-transparent flex justify-between items-center"
                       type="text"
                       name="name"
                       :value="old('name')"
                       id="name"
                       placeholder="Name"
                       required autocomplete="name">
                <i class="fa-solid fa-user text-base flex items-center absolute right-0 py-2 px-4 top-0 bottom-0 text-[#E9855A]"></i>
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>

        <div class="mt-8">
            <div class="relative">
                <input class="w-full rounded-r-full tw-rounded-l-full placeholder-[#E9855A] text-[#E9855A] border-gray-300
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
                        active:border-[#E9855A]
                        border-2 border-orange-700
                        dark:border dark:border-2 dark:border-orange-700
                        active:border active:border-2 active:border-orange-700
                        rounded-md shadow-sm py-3 px-12 bg-transparent flex justify-between items-center"
                       type="password"
                       name="password"
                       :value="old('password')"
                       id="password"
                       placeholder="New Password"
                       required autocomplete="new-password">
                <i onclick="showPassword()"
                   class="fa-solid fa-eye-slash text-base flex items-center absolute right-0 py-2 px-4 top-0 bottom-0 text-[#E9855A]"></i>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-8">
            <div class="relative">
                <input class="w-full rounded-r-full tw-rounded-l-full placeholder-[#E9855A] text-[#E9855A] border-gray-300
                        active:border-[#E9855A]
                        border-2 border-orange-700
                        dark:border dark:border-2 dark:border-orange-700
                        active:border active:border-2 active:border-orange-700
                        rounded-md shadow-sm py-3 px-12 bg-transparent flex justify-between items-center"
                       type="password"
                       name="password_confirmation"
                       :value="old('password')"
                       id="password_confirmation"
                       placeholder="Confirm Password"
                       required autocomplete="new-password">
                <i onclick="showConfirmPassword()"
                   class="fa-solid fa-eye-slash text-base flex items-center absolute right-0 py-2 px-4 top-0 bottom-0 text-[#E9855A]"></i>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-start mt-4">
            <a class="underline text-[#E9855A] color-hover text-sm font-bold hover:underline-offset-1"
               href="{{ route('login') }}">
                {{ __('Login with Account ') }}
            </a>
        </div>

        <div class="flex items-center">
            <x-submit-button class="bag-hover">
                {{ __('Register') }}
            </x-submit-button>
        </div>

    </form>
</x-guest-layout>
