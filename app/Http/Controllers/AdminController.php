<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin()
    {
        return view('pages.admin.admin');
    }
}
