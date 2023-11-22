@extends('adminlayout')
@section('content')
    @include('adminnavbar')
    <div class="container mt-3">
            <h1>Edit Profile</h1>

        <form method="POST" action="{{ route('updateAlbum', ['album' => $album]) }}">
            @csrf
            @method('put')

            {{-- <h3 class="mt-5" style="font-weight: bold">Registration Form</h3>  --}}

            <div class="row g-3">
                <div class="col-md-7 mt-3">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="albumTitle" name="name" value="{{ $album->name }}">
                </div>
            
                <div class="col-md-7">
                    <label for="inputPassword4" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputPassword4" name="last_name" value="{{ $album->last_name }}">
                </div>
            
                <div class="row g-2">
                    <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Age</label>
                    <input type="number" class="form-control" id="inputPassword4" name="age" value="{{ $album->age }}">
                    </div>
        
                    <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="inputPassword4" name="dob" value="{{ $album->dob }}">
                    </div>
                </div>
        
                <div class="row g-2">
                    <label for="inputEmail4" class="form-label">Sex</label>
                    <div class="col-md-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="male" {{ $album->sex == "male" ? 'checked' : ''}} id="flexCheckDefault" name="sex">
                        <label class="form-check-label" for="flexCheck">
                        Male
                        </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" value="female" {{ $album->sex == "female" ? 'checked' : ''}} id="flexCheckDefault" name="sex" value="{{ $album->sex }}">
                        <label class="form-check-label" for="flexCheck">
                        Female
                        </label>
                        </div>
                    </div>
                </div>
        
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{ $album->address }}">
                </div>
        
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="inputPassword4" name="contact" value="{{ $album->contact }}">
                    </div>
            
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="inputPassword4" name="email" value="{{ $album->email }}">
                    </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="dropdown">
    
                                <select id="myDropdown" class="dropdown-content" name="status" value="{{ $album->status }}">
                                  <option name="status" {{ $album->status == "Pending" ? 'selected' : ''}} value="Pending">Pending</option>
                                  <option name="status" {{ $album->status == "Active" ? 'selected' : ''}} value="Active">Active</option>
                                  <option name="status" {{ $album->status == "Inactive" ? 'selected' : ''}} calue="Inactive">Inactive</option>
                           
                                </select>
                            </div>
                    </div>
        
                    <label for="inputPassword4" class="form-label" style="font-weight: bold">Emergency Contact</label>
                <div class="row g-2">
                    <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputPassword4" name="emergency_name" value="{{ $album->emergency_name }}">
                    </div>
        
                    <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Contact Number</label>
                    <input type="number" class="form-control" id="inputPassword4" name="emergency_contact" value="{{ $album->emergency_contact }}">
                    </div>
        
                    <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Relationship</label>
                    <input type="text" class="form-control" id="inputPassword4" name="relationship" value="{{ $album->relationship }}">
                    </div>
        
                </div>
        
                <div class="offset-11 mt-5">
                    <div class="col">
                        {{-- <button type="submit">
                            <a href="{{ url('album_list') }}" class="btn btn-primary">Submit</a>
                        </button> --}}
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="submit" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection