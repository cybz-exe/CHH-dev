@extends('layouts.adminlayout')
@section('content')
    @include('layouts.adminnavbar')
    @include('layouts.adminsidebar')
    <div class="container mt-3">
        <h1 class="fw-bold">Edit Profile</h1>

        <form method="POST" action="{{ route('updateMember', ['member' => $member]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')

            {{-- <h3 class="mt-5" style="font-weight: bold">Registration Form</h3>  --}}

            <div class="row">
                <div class="col-md-7 mt-3">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="memberTitle" name="name" value="{{ $member->name }}">
                </div>

                <div class="col-md-5 mt-5">
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" name="image" accept="image/*" value="{{ $member->image }}">
                        {{-- <label class="input-group-text" for="inputGroupFile02" ></label> --}}
                    </div>
                    {{-- <label for="inputEmail4" class="form-label">Image</label>
                    <input type="file" name="image" accept="image/*" value="{{ $member->image }}"> --}}
                </div>
            </div>
            
                <div class="col-md-7 ">
                    <label for="inputPassword4" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputPassword4" name="last_name" value="{{ $member->last_name }}">
                </div>
            
                <div class="row g-2">
                    <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Age</label>
                    <input type="number" class="form-control" id="inputPassword4" name="age" value="{{ $member->age }}">
                    </div>
        
                    <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="inputPassword4" name="dob" value="{{ $member->dob }}">
                    </div>
                </div>
        
                <div class="row g-2">
                    <label for="inputEmail4" class="form-label">Sex</label>
                    <div class="col-md-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="male" {{ $member->sex == "male" ? 'checked' : ''}} id="flexCheckDefault" name="sex">
                        <label class="form-check-label" for="flexCheck">
                        Male
                        </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" value="female" {{ $member->sex == "female" ? 'checked' : ''}} id="flexCheckDefault" name="sex" value="{{ $member->sex }}">
                        <label class="form-check-label" for="flexCheck">
                        Female
                        </label>
                        </div>
                    </div>
                </div>
        
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{ $member->address }}">
                </div>
        
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="inputPassword4" name="contact" value="{{ $member->contact }}">
                    </div>
            
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="inputPassword4" name="email" value="{{ $member->email }}">
                    </div>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" class="form-select" name="status">
                                <option {{ $member->status == "Pending" ? 'selected' : ''}} value="Pending">Pending</option>
                                <option {{ $member->status == "Active" ? 'selected' : ''}} value="Active">Active</option>
                                <option {{ $member->status == "Inactive" ? 'selected' : ''}} value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
        
                <label for="inputPassword4" class="form-label" style="font-weight: bold">Emergency Contact</label>

                <div class="row g-2">
                    <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputPassword4" name="emergency_name" value="{{ $member->emergency_name }}">
                    </div>
        
                    <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Contact Number</label>
                    <input type="number" class="form-control" id="inputPassword4" name="emergency_contact" value="{{ $member->emergency_contact }}">
                    </div>
        
                    <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Relationship</label>
                    <input type="text" class="form-control" id="inputPassword4" name="relationship" value="{{ $member->relationship }}">
                    </div>
        
                </div>
        
                
                <div class="offset-10 mt-5">
                    <div class="col">
                        {{-- <button type="submit">
                            <a href="{{ url('member_list') }}" class="btn btn-primary">Submit</a>
                        </button> --}}
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button class="btn btn-danger">
                            <a href="/adminhomepage" style="text-decoration: none; color: white;">Cancel</a>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
