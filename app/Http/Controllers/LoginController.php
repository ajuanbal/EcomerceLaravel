<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller {
    public function register(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        //encriptar la password
        $user->password = Hash::make($request->password);

        $user->save();
        //logearlo automaticamente
        Auth::login($user);

        return redirect(route('shop'));
    }

    public function login(Request $request)
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];
        $remember = ($request->has('remember')? true:false);

        if(Auth::attempt($credentials,$remember)){
            if (Auth::user()->name == "admin") {
                $request->session()->regenerate();
                return redirect()->intended(route('privada'));
            }
            $request->session()->regenerate();
            return redirect()->intended(route('shop'));
        }else{
            return redirect(route('login'));
        }

    }

    public function Logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
