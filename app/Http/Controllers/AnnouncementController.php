<?php

namespace App\Http\Controllers;

use App\Models\MemberAnnouncement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    // function announcement()
    // {
    //     return view('announcement');
    // }
    public function announcement()
    {

        $data = MemberAnnouncement::all();
        return view('pages.member.announcement', compact('data'));
        // $announcement = Announcement::all();

        // return view('adminannouncement', ['data' => $announcement]);
    }

    // public function add()
    // {
    //     return view('pages.add');
    // }

    public function addadminannouncement(Request $request)
    {
        $data = [
            //db_column_name => $request->name;
            'file_name' => $request->file_name,
            'date' => $request->date,

        ];

        // var_dump($data);
        $newadminannouncement = MemberAnnouncement::create($data);
        return redirect(route('adminannouncement'));
    }
}
