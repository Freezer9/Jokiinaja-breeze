<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Login') }}
        </h2>
    </x-slot>
    
    <div class="mx-36 grid grid-cols-2 gap-16 pt-20 mb-10">
        
    @include('layouts.card', 
    ['text' => 'Login to reward', 'description' => 'Get a special reward if you login', 'img_path' => '/build/img/login.jpg'])

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="border rounded-3xl p-10 transition-all hover:scale-105 hover:transition-all hover:shadow-slate-700 hover:shadow-xl h-max">
        <form method="POST" action="{{ route('login') }}" class="">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Your email"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" 
                                placeholder="Your password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-blue-300 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 transition-all hover:transition-all" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('register'))
                    <a class="text-sm text-blue-500 dark:text-blue-500 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 transition-all hover:transition-all" href="{{ route('register') }}">
                        {{ __('Create a new account') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    </div>
</x-app-layout>
