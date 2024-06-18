@extends('layouts.show')

@section('content')
<x-guest-layout>
    <div class="py-16">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover"
                style="background-image:url('https://10619-2.s.cdn12.com/rests/original/104_501462047.jpg')">
            </div>
            <div class="w-full p-8 lg:w-1/2">

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Bienvenido</h2>
                    @csrf
                    <div class="mt-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                        <input id="email" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                    </div>

                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs text-gray-500">Forget Password?</a>
                            @endif
                        </div>
                        <input id="password" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" name="password" required autocomplete="current-password">
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="mt-8">
                        <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">{{ __('Log in') }}</button>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="{{ route('register') }}" class="text-xs text-gray-500 uppercase">or sign up</a>
                        <span class="border-b w-1/5 md:w-1/4"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
@endsection
