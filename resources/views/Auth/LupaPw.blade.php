@extends('layout.app')
 
@section('title', 'Lupa Password')
 
@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
 
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Lupa Password?</h1>
            <p class="text-gray-500 mt-1">Masukkan email Anda dan kami akan mengirimkan link reset password.</p>
        </div>
 
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 rounded-lg p-3 mb-4 text-sm">
                {{ session('success') }}
            </div>
        @endif
 
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
 
            <div class="mb-6">
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
 
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 rounded-lg transition duration-200">
                Kirim Link Reset Password
            </button>
        </form>
 
        <p class="text-center text-sm text-gray-500 mt-6">
            <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">← Kembali ke Login</a>
        </p>
 
    </div>
</div>
@endsection