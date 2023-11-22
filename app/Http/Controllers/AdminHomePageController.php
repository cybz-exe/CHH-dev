<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    function adminhomepage()
    {
        return view('adminhomepage');
    }
}
