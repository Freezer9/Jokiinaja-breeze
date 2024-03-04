<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Forgot Password') }}
        </h2>
    </x-slot>
    
    <div class="mx-36 grid grid-cols-2 gap-16 pt-20 mb-20">
        
    @include('layouts.card', 
    ['text' => 'Forgot Your Password?', 'description' => 'Damn such a lazy man', 'img_path' => '/img/forgot.jpg'])

    <div class="border rounded-3xl p-10 transition-all hover:transition-all hover:shadow-slate-700 hover:shadow-xl h-max">
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="mt-2">
                @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
