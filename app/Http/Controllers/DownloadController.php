<?php

namespace App\Http\Controllers;


use App\Models\Announcement;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file_name' => 'required|mimes:pdf,doc,docx'

        ]);

        $data = new Announcement();

        if ($request->hasFile('file_name')) {
            $file_name = $request->file('file_name');
            $announcement = $file_name->getClientOriginalName();

            $file_name->storeAs('proposals', $announcement);
            $data->file_name = $announcement;
        }

        $data->file_name = $request->input('file_name');
        $data->date = $request->input('date');
        $data->file_name = $announcement;

        $data->save();

        return redirect(route('adminannouncement'));
    }

    public function download($file_name)
    {
        $filePath = storage_path('app/proposals/' . $file_name);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            abort(404, 'Wala ang file');
        }
    }



    // public function download(Request $request, $file)
    // {
    //     return response()->download(storage_path('app/announcement/' . $file));
    // }

    // public function showForm()
    // {
    //     return view('adminannouncement');
    // }


    // public function uploadFile(Request $request)
    // {
    //     $request->validate([
    //         'file' => 'required|mimes:pdf',
    //     ]);

    //     $data = new Announcement();

    //     if ($request->hasFile('file')) {
    //         $file = $request->file('file');
    //         $announcement = time() . '_' . $file->getClientOriginalName();


    //         $file->storeAs('announcements', $announcement);
    //         $data->file = $announcement;
    //     }

    //     $data->save();

    //     return redirect(route('adminannouncement'));
    //     // return redirect()->back()->with('success', 'File uploaded successfully!');
    // }
}
