<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            return redirect()->route('user');
        }

        return view('login');
    }

    public function user()
    {
        return view('user');
    }

    public function editor()
    {
        return view('editor');
    }

    public function admin()
    {
        $groups = Auth::user()->groups;
        $text = '';
        foreach($groups as $group) {
            $text .= $group->name . ', ';
        }

        $text = substr($text, 0, -2);

        return view('admin',[
            'groups' => $text
        ]);
    }

}
