@extends('layouts.app')

@php
    $title = 'Register - Create Admin Account';
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
                <ion-icon name="person-add" class="text-3xl text-blue-900"></ion-icon>
            </div>
            <h1 class="text-3xl font-bold text-white mb-2">Create Account</h1>
            <p class="text-blue-200">Join us to manage premium Japanese imports</p>
        </div>

        <!-- Register Card -->
        <div class="rounded-3xl bg-white/10 backdrop-blur-xl border border-white/20 shadow-2xl p-8">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-center text-amber-300" :status="session('status')" />

            <form method="POST" action="{{ route('register.store') }}" class="space-y-5">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-blue-100 mb-2">
                        <ion-icon name="person-outline" class="align-middle mr-1"></ion-icon>
                        Full Name
                    </label>
                    <flux:input
                        name="name"
                        :value="old('name')"
                        type="text"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="John Doe"
                        class="w-full bg-white/10 border-white/20 text-white placeholder-blue-300"
                    />
                </div>

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
                        autocomplete="email"
                        placeholder="admin@example.com"
                        class="w-full bg-white/10 border-white/20 text-white placeholder-blue-300"
                    />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-blue-100 mb-2">
                        <ion-icon name="lock-closed-outline" class="align-middle mr-1"></ion-icon>
                        Password
                    </label>
                    <flux:input
                        name="password"
                        type="password"
                        required
                        autocomplete="new-password"
                        placeholder="Minimum 8 characters"
                        viewable
                        class="w-full bg-white/10 border-white/20 text-white placeholder-blue-300"
                    />
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-blue-100 mb-2">
                        <ion-icon name="shield-checkmark-outline" class="align-middle mr-1"></ion-icon>
                        Confirm Password
                    </label>
                    <flux:input
                        name="password_confirmation"
                        type="password"
                        required
                        autocomplete="new-password"
                        placeholder="Re-enter your password"
                        viewable
                        class="w-full bg-white/10 border-white/20 text-white placeholder-blue-300"
                    />
                </div>

                <!-- Submit Button -->
                <flux:button 
                    type="submit"
                    variant="primary" 
                    class="w-full bg-gradient-to-r from-amber-400 to-yellow-300 hover:from-amber-500 hover:to-yellow-400 text-blue-900 font-bold py-3 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 mt-6"
                    data-test="register-user-button"
                >
                    <ion-icon name="rocket-outline" class="text-xl align-middle mr-2"></ion-icon>
                    Create Admin Account
                </flux:button>
            </form>

            <!-- Login Link -->
            <div class="mt-6 pt-6 border-t border-white/10 text-center">
                <p class="text-blue-200 text-sm">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-amber-300 hover:text-amber-200 font-semibold transition-colors ml-1" wire:navigate>
                        Sign in here
                    </a>
                </p>
            </div>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="inline-flex items-center text-blue-200 hover:text-white transition-colors text-sm">
                <ion-icon name="arrow-back-outline" class="mr-2"></ion-icon>
                Back to Home
            </a>
    </div>
@endsection
