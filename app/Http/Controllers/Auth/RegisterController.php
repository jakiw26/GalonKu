<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Tampilkan form registrasi.
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Proses registrasi user baru.
     */
    public function register(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'phone'    => ['required', 'varchar', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ], [
            'name.required'      => 'Nama wajib diisi.',
            'phone'              => 'No HP wajib diisi.',
            'email.required'     => 'Email wajib diisi.',
            'email.unique'       => 'Email ini sudah terdaftar.',
            'password.required'  => 'Password wajib diisi.',
            'password.min'       => 'Password minimal 6 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        // Buat user baru
        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Login otomatis setelah register
        Auth::login($user);

        return redirect()->route('dashboard')
            ->with('success', 'Akun berhasil dibuat! Selamat datang, ' . $user->name . '!');
    }
}
