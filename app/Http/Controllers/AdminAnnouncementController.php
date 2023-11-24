<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AdminAnnouncementController extends Controller
{
    public function adminannouncement()
    {

        $data = Announcement::all();
        return view('adminannouncement', compact('data'));
    }


    public function addadminannouncement(Request $request)
    {
        $data = [
            'file_name' => $request->file_name,
            'date' => $request->date,
        ];

        // var_dump($data);
        $newadminannouncement = Announcement::create($data);
        return redirect(route('adminannouncement'));
    }
    public function deleteAnnouncement(Announcement $announcement)
    {
        $announcement->delete();
        return redirect(route('adminannouncement'));
    }
}
