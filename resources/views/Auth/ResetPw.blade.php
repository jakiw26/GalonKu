@extends('layout.app')
 
@section('title', 'Reset Password')
 
@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
 
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Reset Password</h1>
            <p class="text-gray-500 mt-1">Buat password baru untuk akun Anda.</p>
        </div>
 
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
 
            <input type="hidden" name="token" value="{{ $token }}">
 
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ $email ?? old('email') }}"
                    required
                    class="w-full border @error('email') border-red-400 @else border-gray-300 @enderror rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
 
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password Baru</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    class="w-full border @error('password') border-red-400 @else border-gray-300 @enderror rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Minimal 8 karakter"
                >
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
 
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Ulangi password baru"
                >
            </div>
 
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 rounded-lg transition duration-200">
                Reset Password
            </button>
        </form>
 
    </div>
</div>
@endsection