@extends('adminlayout')
@section('content')
    @include('adminnavbar')
    @include('adminsidebar')
    <div class="d-flex container p-4 mt-4" style="background-color: rgba(119, 119, 119, 0.1)">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img id="imagePlaceholder" src="{{ asset('images/' . $album->image_filename) }}" alt="Image Placeholder">
                <div class="card-body">
                    <p class="card-text d-flex flex-column">
                        {{-- <button type="button" class="btn btn-primary">Update Info</button> --}}
                        <a href="{{ route('update', ['album' => $album]) }}" class="btn btn-primary" role="button">Update Info</a>
                        <form method="POST" action="{{ route('deleteAlbum', ['album' => $album]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger col-md-12" value="Delete">
                            {{-- <a href="{{ route('deleteAlbum', ['album' => $album]) }}" class="btn btn-danger btn-sm" role="button">Delete</a> --}}
                        </form>
                    </p>
                </div>
              </div>
        </div>

        <div class="col-9 ms-4">
            <div class="intro mt-2">
                <div class="row">
                    <div class="col-11">
                        <h1 class="fw-bold" style="text-transform: uppercase">{{ $album->name }}, {{ $album->last_name }}</h1>
                    </div>
                    <div class="col-1">
                        <a href="/adminhomepage"><i class="fa-regular fa-circle-xmark fa-xl"></i></a>
                    </div>
                </div>
                <p class="h4">{{ $album->contact }}</p>
                <p class="h5">
                    @if($album->status == 'Pending')
                        <span style="display: inline-block; width: 12px; height: 12px; background-color: rgb(255, 123, 0); border-radius: 50%;"></span>
                    @elseif($album->status == 'Active')
                        <span style="display: inline-block; width: 12px; height: 12px; background-color: green; border-radius: 50%;"></span>
                    @elseif($album->status == 'Inactive')
                        <span style="display: inline-block; width: 12px; height: 12px; background-color: red; border-radius: 50%;"></span>
                    @endif
                    <span> {{ $album->status }}</span>
                </p>

            </div>

            <div class="d-flex mt-5 b">
                <div class="col-7">
                    <p class="h5"><span class="fw-bold">Age: </span>{{ $album->age }}</p>
                    <p class="h5"><span class="fw-bold">Date of Birth: </span>{{ $album->dob }}</p>
                    <p class="h5"><span class="fw-bold">Address: </span>{{ $album->address }}</p>
                    <p class="h5"><span class="fw-bold">Email: </span>{{ $album->email }}</p>
                </div>
                <div class="col-5">
                    <p class="h5"><span class="fw-bold">Date of Membership: </span>{{ $album->created_at }}</p>
                </div>
            </div>

            <div class="mt-5">
                <p class="h5"><span class="fw-bold">Event/Attendance: </span><a href="#">Click here</a></p>
            </div>

            <div class="mt-5">
                <h5 class="fw-bold">Emergency Contact:</h5>
                <div class="ms-3">
                    <p class="h5"><span class="fw-bold">Name: </span>{{ $album->emergency_name }}</p>
                    <p class="h5"><span class="fw-bold">Contact Number: </span>{{ $album->emergency_contact }}</p>
                    <p class="h5"><span class="fw-bold">Relationship: </span>{{ $album->relationship }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection