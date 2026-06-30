<?php
 
namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
 
class ResetPwController extends Controller
{
    /**
     * Tampilkan form reset password.
     */
    public function showResetForm(Request $request, string $token)
    {
        return view('auth.reset-password', [
            'token' => $token,
            'email' => $request->email,
        ]);
    }
 
    /**
     * Proses reset password.
     */
    public function reset(Request $request)
    {
        $request->validate([
            'token'    => ['required'],
            'email'    => ['required', 'email'],
            'password' => ['required', 'min:6', 'confirmed'],
        ], [
            'email.required'     => 'Email wajib diisi.',
            'password.required'  => 'Password wajib diisi.',
            'password.min'       => 'Password minimal 6 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);
 
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password'       => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
 
                event(new PasswordReset($user));
            }
        );
 
        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')
                ->with('success', 'Password berhasil direset. Silakan login dengan password baru Anda.');
        }
 
        return back()->withErrors(['email' => __($status)]);
    }
}