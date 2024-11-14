@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen bg-blue-100" style="background-image: url('/images/ocean-bg.jpg'); background-size: cover; background-position: center;">
    <div class="w-full max-w-md p-8 space-y-4 rounded-lg bg-white bg-opacity-90 shadow-lg">
        <h1 class="text-3xl font-semibold text-center text-teal-700">Seja bem-vindo</h1>
        <p class="text-center text-sm text-teal-600">Acesse sua conta e navegue pelo oceano de possibilidades</p>
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-teal-700">Email</label>
                <input type="email" name="email" id="email" required autofocus
                    class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400 text-teal-800" />
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-teal-700">Senha</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400 text-teal-800" />
            </div>

            <!-- Remember Me & Forgot Password Links -->
            <div class="flex justify-between items-center">
                <label class="flex items-center text-teal-600">
                    <input type="checkbox" name="remember" class="mr-2"> Lembrar de mim
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-teal-600 hover:underline">Esqueceu sua senha?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full px-4 py-2 font-bold text-white bg-teal-600 rounded-md hover:bg-teal-700 transition-colors">
                Entrar
            </button>
        </form>

        <!-- Registration Link -->
        <p class="text-sm text-center text-teal-600">Não possui uma conta? <a href="{{ route('register') }}"
                class="font-medium text-teal-700 hover:underline">Cadastre-se</a></p>
    </div>
</div>
@endsection

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>

            <a href="{{route('google.redirect')}}">Login com o Google</a>
        </div>
    </form>
</x-guest-layout>
