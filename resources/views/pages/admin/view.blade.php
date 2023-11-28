@extends('layouts.adminlayout')
@section('content')
    @include('layouts.adminnavbar')
    @include('layouts.adminsidebar')

    <div class="container mt-4">
        <h1 class="fw-bold">Member Profile</h1>
        <div class="d-flex container p-4 mt-4 ps-4" style="background-color: rgba(119, 119, 119, 0.1)">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="d-flex justify-content-center">
                    <img src="{{ $member->image }}" id="image" style="width: 250px; height: 250px" class="rounded-circle pb-3" src="" alt="image"/>
                </div>
                    <div class="card-body">
                        <p class="card-text d-flex flex-column">
                            {{-- <button type="button" class="btn btn-primary">Update Info</button> --}}
                            <a href="{{ route('update', ['member' => $member]) }}" class="btn btn-primary" role="button">Update Info</a>
                            <form method="POST" action="{{ route('deleteMember', ['member' => $member]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger col-md-12" value="Delete">
                                {{-- <a href="{{ route('deleteMember', ['member' => $member]) }}" class="btn btn-danger btn-sm" role="button">Delete</a> --}}
                            </form>
                        </p>
                    </div>
                  </div>
            </div>
    
            <div class="col-9 ms-4">
                <div class="intro mt-2">
                    <div class="row">
                        <div class="col-11">
                            <h1 class="fw-bold" style="text-transform: uppercase">{{ $member->name }}, {{ $member->last_name }}</h1>
                        </div>
                        <div class="col-1">
                            <a href="/adminhomepage"><i class="fa-regular fa-circle-xmark fa-xl"></i></a>
                        </div>
                    </div>
                    <p class="h4">{{ $member->contact }}</p>
                    <p class="h5">
                        @if($member->status == 'Pending')
                            <span style="display: inline-block; width: 12px; height: 12px; background-color: rgb(255, 123, 0); border-radius: 50%;"></span>
                        @elseif($member->status == 'Active')
                            <span style="display: inline-block; width: 12px; height: 12px; background-color: green; border-radius: 50%;"></span>
                        @elseif($member->status == 'Inactive')
                            <span style="display: inline-block; width: 12px; height: 12px; background-color: red; border-radius: 50%;"></span>
                        @endif
                        <span> {{ $member->status }}</span>
                    </p>
    
                </div>
    
                <div class="d-flex mt-5 b">
                    <div class="col-7">
                        <p class="h5"><span class="fw-bold">Age: </span>{{ $member->age }}</p>
                        <p class="h5"><span class="fw-bold">Date of Birth: </span>{{ $member->dob }}</p>
                        <p class="h5"><span class="fw-bold">Address: </span>{{ $member->address }}</p>
                        <p class="h5"><span class="fw-bold">Email: </span>{{ $member->email }}</p>
                    </div>
                    <div class="col-5">
                        <p class="h5"><span class="fw-bold">Date of Membership: </span>{{ $member->created_at }}</p>
                    </div>
                </div>
    
                <div class="mt-5">
                    <p class="h5"><span class="fw-bold">Event/Attendance: </span><a href="#">Click here</a></p>
                </div>
    
                <div class="mt-5">
                    <h5 class="fw-bold">Emergency Contact:</h5>
                    <div class="ms-3">
                        <p class="h5"><span class="fw-bold">Name: </span>{{ $member->emergency_name }}</p>
                        <p class="h5"><span class="fw-bold">Contact Number: </span>{{ $member->emergency_contact }}</p>
                        <p class="h5"><span class="fw-bold">Relationship: </span>{{ $member->relationship }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script>
        $(document).ready(function(){
            $('#image').change(function(){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL($('#image')[0].files[0]);
            });
        });
    </script>
@endsection
