<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class LupaPwController extends Controller
{
    /**
     * Tampilkan form lupa password.
     */
    public function showLinkRequestForm()
    {
        return view('auth.LupaPw');
    }

    /**
     * Kirim link reset password ke email.
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email'    => 'Format email tidak valid.',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('success', __($status));
        }

        return back()->withErrors(['email' => __($status)]);
    }
}
