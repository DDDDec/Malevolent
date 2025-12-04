<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User\User;
use App\Models\User\UserPlutonium;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request): RedirectResponse
    {
        $credentials = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/profile/'.$request->name);
        }

        return back()->withErrors(['login' => 'Login attempt failed. Please check your username and password.'])->onlyInput('name');
    }

    public function register(Request $request): RedirectResponse
    {
        $userAction = UserPlutonium::where('plutonium_id', $request->id)->first();

        if (!$userAction) {
            return back()->withErrors(['register' => 'Register attempt failed. Please check your email, password and plutonium guid.'])->onlyInput('id');
        }

        $user = User::create([
            'id' => $userAction->plutonium_id,
            'name' => $userAction->plutonium_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        Auth::login($user);

        return redirect('/profile/'.$userAction->plutonium_name);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
