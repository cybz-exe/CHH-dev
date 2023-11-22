@extends('adminlayout')

@include('adminupdatenavbar')
@section('content')
<div class="container">
    <h1>Update Page</h1>

    <div class="container">
      <form method="POST" action="{{ route('addAlbum') }}">
        @csrf
        @method('post')
        <h3 class="mt-5" style="font-weight: bold">Registration Form</h3> 
        <div class="row g-3">
            <div class="col-md-7 mt-3">
              <label for="inputEmail4" class="form-label">Name</label>
              <input type="text" class="form-control" id="albumTitle" name="albumTitle">
            </div>
        
            <div class="col-md-7">
              <label for="inputPassword4" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="inputPassword4" name="albumArtist">
            </div>
        
            <div class="row g-2">
              <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Age</label>
                <input type="number" class="form-control" id="inputPassword4" >
              </div>
    
              <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Date of Birth</label>
                <input type="number" class="form-control" id="inputPassword4" >
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
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheck">
                   Female
                    </label>
                  </div>
                </div>
            </div>
    
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="albumGenre">
            </div>
    
            <div class="row g-2">
                <div class="col-md-4">
                  <label for="inputPassword4" class="form-label">Contact Number</label>
                  <input type="number" class="form-control" id="inputPassword4" name="albumYear">
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
    
            <div class="offset-11 mt-5">
            <div class="col">
                <button type="submit" class="btn btn-primary">Sign in</button>
                <button type="submit" class="btn btn-primary">Cancel</button>
            </div>
            </div>
            {{-- <div class="col-1">
                <button type="submit" class="btn btn-primary">Cancel</button>
              </div>
            </div> --}}
          </div>
    
            </form>
          </div>
</div>
@endsection