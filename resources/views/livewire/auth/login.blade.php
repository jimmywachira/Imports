@extends('layouts.app')

@php
    $title = 'Login - Admin Access';
@endphp

@section('content')
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-72 h-72 bg-amber-500/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
        </div>

    <div class="relative w-full max-w-md">
        <!-- Logo/Brand Section -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-400 to-yellow-300 mb-4 shadow-xl">
                <ion-icon name="car-sport" class="text-3xl text-blue-900"></ion-icon>
            </div>
            <h1 class="text-3xl font-bold text-white mb-2">Welcome Back</h1>
            <p class="text-blue-200">Sign in to manage your vehicle inventory</p>
        </div>

        <!-- Login Card -->
        <div class="rounded-3xl bg-white/10 backdrop-blur-xl border border-white/20 shadow-2xl p-8">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-center text-amber-300" :status="session('status')" />

            <form method="POST" action="{{ route('login.store') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-blue-100 mb-2">
                        <ion-icon name="mail-outline" class="align-middle mr-1"></ion-icon>
                        Email Address
                    </label>
                    <flux:input
                        name="email"
                        :value="old('email')"
                        type="email"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="admin@example.com"
                        class="w-full bg-white/10 border-white/20 text-white placeholder-blue-300"
                    />
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-sm font-medium text-blue-100">
                            <ion-icon name="lock-closed-outline" class="align-middle mr-1"></ion-icon>
                            Password
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs text-amber-300 hover:text-amber-200 transition-colors" wire:navigate>
                                Forgot password?
                            </a>
                        @endif
                    </div>
                    <flux:input
                        name="password"
                        type="password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter your password"
                        viewable
                        class="w-full bg-white/10 border-white/20 text-white placeholder-blue-300"
                    />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <flux:checkbox 
                        name="remember" 
                        :checked="old('remember')"
                        class="text-amber-400 focus:ring-amber-500"
                    />
                    <label for="remember" class="ml-2 text-sm text-blue-100">
                        Remember me for 30 days
                    </label>
                </div>

                <!-- Submit Button -->
                <flux:button 
                    variant="primary" 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-amber-400 to-yellow-300 hover:from-amber-500 hover:to-yellow-400 text-blue-900 font-bold py-3 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300"
                    data-test="login-button"
                >
                    <ion-icon name="log-in-outline" class="text-xl align-middle mr-2"></ion-icon>
                    Sign In to Dashboard
                </flux:button>
            </form>

            <!-- Register Link -->
            @if (Route::has('register'))
                <div class="mt-6 pt-6 border-t border-white/10 text-center">
                    <p class="text-blue-200 text-sm">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-amber-300 hover:text-amber-200 font-semibold transition-colors ml-1" wire:navigate>
                            Create an account
                        </a>
                    </p>
                </div>
            @endif
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="inline-flex items-center text-blue-200 hover:text-white transition-colors text-sm">
                <ion-icon name="arrow-back-outline" class="mr-2"></ion-icon>
                Back to Home
            </a>
    </div>
@endsection
