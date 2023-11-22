<?php

namespace App\Http\Controllers;


use App\Models\Announcement;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(Request $request, $file)
    {
        return response()->download(storage_path('app/announcement/' . $file));
    }

    public function showForm()
    {
        return view('adminannouncement');
    }


    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf',
        ]);

        $data = new Announcement();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $announcement = time() . '_' . $file->getClientOriginalName();


            $file->storeAs('announcements', $announcement);
            $data->file = $announcement;
        }

        $data->save();

        return redirect(route('adminannouncement'));
        // return redirect()->back()->with('success', 'File uploaded successfully!');
    }
}
