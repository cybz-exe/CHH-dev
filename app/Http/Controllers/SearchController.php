<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $data = Album::where('name', 'like', '%' . $search . '%')
            ->orWhere('last_name', 'like', '%' . $search . '%')
            ->orWhere('contact', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('status', 'like', '%' . $search . '%')
            ->get();

        return view('pages.index', ['data' => $data]);
    }
}
