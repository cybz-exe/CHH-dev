<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumListController extends Controller
{
    //
    public function index()
    {
        $albums = Album::all();

        return view('pages.index', ['data' => $albums]);
    }

    public function add()
    {
        return view('pages.add');
    }

    public function addAlbum(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Add max file size validation if needed
            // Add other validation rules as needed
        ]);

        $data = [
            'name' => $request->name,
            'last_name' => $request->last_name,
            'contact' => $request->contact,
            'email' => $request->email,
            'status' => $request->status,
            'age' => $request->age,
            'dob' => $request->dob,
            'sex' => $request->sex,
            'address' => $request->address,
            'emergency_name' => $request->emergency_name,
            'emergency_contact' => $request->emergency_contact,
            'relationship' => $request->relation,
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/album', $imageName); // Store the image in the public/album directory

            $data['image'] = 'album/' . $imageName; // Save the image path in the database
        }

        // Create a new album record
        $newAlbum = Album::create($data);

        return redirect(route('register'))->with('message', 'Album added successfully!');
    }


    public function showAlbum(Album $album)
    {
        // var_dump($album);
        return view('pages.view', ['album' => $album]);
    }

    public function update(Album $album)
    {
        // var_dump($album);
        return view('pages.update', ['album' => $album]);
    }

    public function updateAlbum(Album $album, Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add other validation rules as needed
        ]);

        $data = [
            'name' => $request->name,
            'last_name' => $request->last_name,
            'contact' => $request->contact,
            'email' => $request->email,
            'status' => $request->status,
            'age' => $request->age,
            'dob' => $request->dob,
            'sex' => $request->sex,
            'address' => $request->address,
            'emergency_name' => $request->emergency_name,
            'emergency_contact' => $request->emergency_contact,
            'relationship' => $request->relationship,
        ];

        // Update other details
        $album->update($data);

        // Check if a new image is provided
        if ($request->hasFile('image')) {
            // Validate and store the new image
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $image = $request->file('image');
            $albumFileName = time() . '_' . $image->getClientOriginalName();

            // Store the new image in the 'public/images' directory
            $image->storeAs('public/images', $albumFileName);

            // Update the 'image' column in the database with the new filename
            $album->update(['image' => $albumFileName]);
        }

        return redirect(route('index'));
    }


    public function deleteAlbum(Album $album)
    {
        $album->delete();
        return redirect(route('index'));
    }

    public function viewAlbum(Album $album)
    {
        return view('pages.');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust mime types and max size as needed
        ]);

        $size = $request->file('image')->getSize();
        $image = $request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('public/images', $image);

        $photo = new Album();
        $photo->image = $image;
        $photo->size = $size;
        $photo->save();

        return redirect()->back();
    }
}
