<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WhatsappController;
use App\Models\User;
use App\Models\Verification;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required_without:phone_number', 'max:255', 'unique:' . User::class],
            'phone_number' => ['required', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'captcha' => ['required', 'captcha']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        $otp_code = random_int(100000, 999999);
        $token = Str::random(25);
        $verification = Verification::create([
            'user_id' => $user->id,
            'otp_code' => $otp_code,
            'token' => $token,
            'status' => 'REQUEST',
        ]);

        $whatsapp = new WhatsappController;
        $message = "Kode OTP Anda Adalah " . $verification->otp_code;
        $whatsapp->kirimPesan($message, $user->phone_number);

        $user->assignRole('USER-CONFIRMATION');
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
