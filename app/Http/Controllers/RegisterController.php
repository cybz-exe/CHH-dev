<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function register()
    {
        return view('pages.member.register');
    }
    
}
