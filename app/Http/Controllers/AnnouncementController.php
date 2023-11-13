<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    function announcement()
    {
        return view('announcement');
    }
}
