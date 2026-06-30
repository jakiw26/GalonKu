@extends('layout.app')
 
@section('title', 'Daftar Akun')
 
@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
 
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Buat Akun Baru</h1>
            <p class="text-gray-500 mt-1">Isi data di bawah untuk mendaftar</p>
        </div>
 
        <form method="POST" action="{{ route('register') }}">
            @csrf
 
            {{-- Nama --}}
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required autofocus
                    class="w-full border @error('name') border-red-400 @else border-gray-300 @enderror rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Nama lengkap Anda"
                >
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- No. HP --}}
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">No. HP</label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    value="{{ old('phone') }}"
                    required
                    class="w-full border @error('phone') border-red-400 @else border-gray-300 @enderror rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Contoh: 081234567890"
                >
                @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
 
            {{-- Email --}}
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full border @error('email') border-red-400 @else border-gray-300 @enderror rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="nama@email.com"
                >
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
 
            {{-- Password --}}
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    class="w-full border @error('password') border-red-400 @else border-gray-300 @enderror rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Minimal 6 karakter"
                >
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
 
            {{-- Konfirmasi Password --}}
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Ulangi password"
                >
            </div>
 
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 rounded-lg transition duration-200">
                Daftar Sekarang
            </button>
        </form>
 
        <p class="text-center text-sm text-gray-500 mt-6">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">Login di sini</a>
        </p>
 
    </div>
</div>
@endsection