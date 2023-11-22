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
        $data = [
            //db_column_name => $request->name;
            'name' => $request->name,
            'last_name' => $request->last_name,
            'contact' => $request->contact,
            'email' => $request->email,
            'status' => $request->status,
            'age' => $request->age,
            'dob' => $request->dob,
            'sex' => $request->sex,
            'address' => $request->address,
            // 'fee' => $request->fee,
            'emergency_name' => $request->emergency_name,
            'emergency_contact' => $request->emergency_contact,
            'relationship' => $request->relation,
        ];

        // var_dump($data);
        $newAlbum = Album::create($data);
        return redirect(route('register'));
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
        $data = [
            //db_column_name => $request->name;
            // 'album_title' => $request->albumTitle,
            // 'album_artist' => $request->albumArtist,
            // 'genre' => $request->albumGenre,
            // 'year' => $request->albumYear,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'contact' => $request->contact,
            'email' => $request->email,
            'status' => $request->status,
            'age' => $request->age,
            'dob' => $request->dob,
            'sex' => $request->sex,
            'address' => $request->address,
            // 'fee' => $request->fee,
            'emergency_name' => $request->emergency_name,
            'emergency_contact' => $request->emergency_contact,
            'relationship' => $request->relationship,
        ];

        // var_dump($data);
        $album->update($data);
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
}
