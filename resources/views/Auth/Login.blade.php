@extends('layout.app')
 
@section('title', 'Login')
 
@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
 
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Selamat Datang</h1>
            <p class="text-gray-500 mt-1">Silakan login ke akun Anda</p>
        </div>
 
        {{-- Error global --}}
        @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg p-3 mb-4 text-sm">
                {{ $errors->first() }}
            </div>
        @endif
 
        <form method="POST" action="{{ route('login') }}">
            @csrf
 
            {{-- Email --}}
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required autofocus
                    class="w-full border @error('email') border-red-400 @else border-gray-300 @enderror rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="nama@email.com"
                >
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
 
            {{-- Password --}}
            <div class="mb-4">
                <div class="flex justify-between items-center mb-1">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <a href="{{ route('password.request') }}" class="text-xs text-blue-600 hover:underline">Lupa password?</a>
                    {{-- <a href="#" class="text-xs text-blue-600 hover:underline">Lupa password?</a> --}}
                </div>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    class="w-full border @error('password') border-red-400 @else border-gray-300 @enderror rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="••••••••"
                >
            </div>
 
            {{-- Remember Me --}}
            <div class="flex items-center mb-6">
                <input type="checkbox" id="remember" name="remember" class="mr-2">
                <label for="remember" class="text-sm text-gray-600">Ingat saya</label>
            </div>
 
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 rounded-lg transition duration-200">
                Login
            </button>
        </form>
 
        <p class="text-center text-sm text-gray-500 mt-6">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-blue-600 font-medium hover:underline">Daftar sekarang</a>
            {{-- <a href="#" class="text-blue-600 font-medium hover:underline">Daftar sekarang</a> --}}
        </p>
 
    </div>
</div>
@endsection