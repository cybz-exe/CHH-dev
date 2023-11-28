<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member; // Change the import to use the Member model

class MemberListController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('pages.admin.index', ['data' => $members]);
    }

    public function add()
    {
        return view('pages.add');
    }

    public function addMember(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            // Add other validation rules as needed
        ]);

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        $data = [
            'image' => asset('assets/img/' . $filename),
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

        $newMember = Member::create($data);

        return redirect(route('register'))->with('message', 'Member added successfully!');
    }

    public function showMember(Member $member)
    {
        return view('pages.admin.view', ['member' => $member]);
    }

    public function update(Member $member, Request $request)
    {
        return view('pages.admin.update', ['member' => $member]);
    }

    public function updateMember(Member $member, Request $request)
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

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $image = $request->file('image');
            $memberFileName = time() . '_' . $image->getClientOriginalName();

            $image->storeAs('public/images', $memberFileName);

            $data['image'] = $memberFileName;
        }

        $member->update($data);

        return redirect(route('adminhomepage'));
    }

    public function deleteMember(Member $member)
    {
        $member->delete();
        return redirect(route('adminhomepage'));
    }

    public function viewMember(Member $member)
    {
        return view('pages.');
    }
}
