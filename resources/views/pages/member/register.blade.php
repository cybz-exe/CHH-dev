@extends('layouts.layout')
@section('content')
@include('layouts.navbar')

    <div class="container mt-4" style="overflow: hidden;">
        <h1 class="fw-bold">Member Registration</h1>
        <form method="POST" action="{{ route('addMember') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <h3 class="mt-3" style="font-weight: bold">Personal Information</h3>
            <div class="row g-3">
                <div class="col-md-7 mt-3">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        pattern="[A-Za-z\s]+" title="Only letters are allowed" required>
                </div>

                <div class="col-md-4 mt-3">
                    {{-- <img id="image" style="width: 250px; height: 250px" class="rounded-circle pb-3" src="" alt="image"/> --}}
                    <label class="form-label">Profile Picture</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="col-md-7">
                    <label for="inputPassword4" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputPassword4" name="last_name"
                        pattern="[A-Za-z\s]+" title="Only letters are allowed" required>
                </div>

                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Age</label>
                        <input type="number" class="form-control" id="inputPassword4" name="age" required>
                    </div>

                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="inputPassword4" name="dob" required>
                    </div>
                </div>

                <div class="row g-2">
                    <label for="inputEmail4" class="form-label">Sex</label>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="male" id="flexCheckDefault"
                                name="sex" required>
                            <label class="form-check-label" for="flexCheck"> Male </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="female" id="flexCheckDefault"
                                name="sex" required>
                            <label class="form-check-label" for="flexCheck"> Female </label>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder=""
                        name="address" required>
                </div>

                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="inputPassword4" name="contact"
                            pattern="^\d{11}$" title="Please enter 11 digits." required>
                    </div>

                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="inputPassword4" name="email" required>
                    </div>
                </div>

                <h3 class="mt-4" style="font-weight: bold">Emergency Contact</h3>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Name</label>
                        <input type="" class="form-control" id="inputPassword4" name="emergency_name"
                            pattern="[A-Za-z\s]+" title="Only letters are allowed" required>
                    </div>

                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="inputPassword4" name="emergency_contact"
                            pattern="^\d{11}$" title="Please enter 11 digits" required>
                    </div>
                    <input type="hidden" class="form-control" id="inputPassword4" name="status" value="Pending">

                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Relationship</label>
                        <input type="" class="form-control" id="inputPassword4" name="relation"
                            pattern="[A-Za-z\s]+" title="Only letters are allowed" required>
                    </div>
                    <input type="hidden" name="created_at"
                        value="{{ $announcement->created_at ?? now()->format('Y-m-d') }}">

                </div>

                <div class="mt-5">
                    <div class="col d-flex flex-row-reverse m">
                        <button class="btn btn-danger ms-2">
                            <a href="/" style="text-decoration: none; color: white;">Cancel</a>
                        </button>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </div>
        </form>
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
