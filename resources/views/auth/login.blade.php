<x-guest-layout>
    {{--    <x-jet-authentication-card>--}}
    {{--        <x-slot name="logo">--}}
    {{--            <x-jet-authentication-card-logo />--}}
    {{--        </x-slot>--}}



    {{--        @if (session('status'))--}}
    {{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
    {{--                {{ session('status') }}--}}
    {{--            </div>--}}
    {{--        @endif--}}

    {{--        <form method="POST" action="{{ route('login') }}">--}}
    {{--            @csrf--}}

    {{--            <div>--}}
    {{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
    {{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
    {{--            </div>--}}

    {{--            <div class="mt-4">--}}
    {{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
    {{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
    {{--            </div>--}}

    {{--            <div class="block mt-4">--}}
    {{--                <label for="remember_me" class="flex items-center">--}}
    {{--                    <x-jet-checkbox id="remember_me" name="remember" />--}}
    {{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
    {{--                </label>--}}
    {{--            </div>--}}

    {{--            <div class="flex items-center justify-end mt-4">--}}
    {{--                @if (Route::has('password.request'))--}}
    {{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
    {{--                        {{ __('Forgot your password?') }}--}}
    {{--                    </a>--}}
    {{--                @endif--}}

    {{--                <x-jet-button class="ml-4">--}}
    {{--                    {{ __('Login') }}--}}
    {{--                </x-jet-button>--}}
    {{--                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
    {{--            </div>--}}
    {{--        </form>--}}
    {{--    </x-jet-authentication-card>--}}
</x-guest-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Login Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">

<div class="w-full flex flex-wrap">

    <!-- Login Section -->
    <div class="w-full md:w-1/2 flex flex-col">

        <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
            <a href="/" class="bg-gray-800 text-white font-bold text-xl p-4">Inkuz</a>
        </div>

        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <x-jet-validation-errors class="mb-4" />
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Hasło') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Pamiętaj mnie') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Zapomniałeś hasła?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Zaloguj') }}
                    </x-jet-button>
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Rejestracja</a>
                </div>
            </form>
        </div>

    </div>

    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">
        <img class="object-cover w-full h-screen hidden md:block" src="http://phpography.com/images/cows-on-the-meadow-wallpaper-1.jpg">
    </div>
</div>

</body>
</html>
