@extends('layout')
@section('content')
@include('navbar')

<div class="container">
    <h3 class="mt-5" style="font-weight: bold">Registration Form</h3> 
    <form class="row g-3">
        <div class="col-md-7 mt-3">
          <label for="inputEmail4" class="form-label">Name</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
    
        <div class="col-md-7">
          <label for="inputPassword4" class="form-label">Last Name</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
    
        <div class="row g-2">
          <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Age</label>
            <input type="number" class="form-control" id="inputPassword4">
          </div>

          <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="inputPassword4">
          </div>
        </div>

        <div class="row g-2">
          <label for="inputEmail4" class="form-label">Sex</label>
            <div class="col-md-1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheck">
                 Male
                </label>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheck">
               Female
                </label>
              </div>
            </div>
        </div>

        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="row g-2">
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Contact Number</label>
              <input type="number" class="form-control" id="inputPassword4">
            </div>
  
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="inputPassword4">
            </div>
          </div>

          <label for="inputPassword4" class="form-label" style="font-weight: bold">Emergency Contact</label>
        <div class="row g-2">
          <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Name</label>
            <input type="" class="form-control" id="inputPassword4">
          </div>

          <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Contact Number</label>
            <input type="number" class="form-control" id="inputPassword4">
          </div>

          <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Relationship</label>
            <input type="" class="form-control" id="inputPassword4">
          </div>

        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </div>
      </form>
    </div>
</div>
@endsection 