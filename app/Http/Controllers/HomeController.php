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
        $groups = Auth::user()->groups;
        $text = "";
        foreach($groups as $group) {
            $text .= $group->name . ", ";
        }

        $text = substr($text, 0, -2);

        return view('admin',[
            'groups' => $text
        ]);
    }

}
