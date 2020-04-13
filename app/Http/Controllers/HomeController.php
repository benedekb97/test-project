<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()) {
            return redirect()->route('user');
        }else{
            return view('login');
        }
    }

    public function user(Request $request)
    {
        return view('user');
    }

    public function editor(Request $request)
    {
        return view('editor');
    }

    public function admin(Request $request)
    {
        return view('admin');
    }

}
