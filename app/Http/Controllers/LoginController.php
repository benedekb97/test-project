<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = strtolower($request->input('username'));
        $password = $request->input('password');

        $user = User::all()->where('username', $username)->first();

        if($user && $user->login_attempts>2) {
            $rules = ['captcha' => 'required|captcha'];
            $validator = validator()->make(request()->all(), $rules);
            if($validator->fails()) {
                return view('login', [
                    'error' => 'Bejelentkezés sikertelen! Hibás Captcha',
                    'captcha' => true
                ]);
            }
        }

        if(Auth::attempt([
            'username' => $username,
            'password' => $password
        ])) {
            $user->login_attempts = 0;
            $user->last_login = date('Y-m-d H:i:s');
            $user->save();
            return redirect()->route('admin');
        }

        if($user) {
            $user->login_attempts++;
            $user->save();

            if($user->login_attempts>2) {
                $captcha = true;
            }else{
                $captcha = false;
            }
        }else{
            $captcha = false;
        }

        return view('login', [
            'error' => 'Bejelentkezés sikertelen!',
            'captcha' => $captcha
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }
}
