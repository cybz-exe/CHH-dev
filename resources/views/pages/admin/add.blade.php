{{-- @extends('layout')
@section('content')
    @include('navbar')
        <div class="container mt-3">
            <h1>Add Album</h1>

            <div class="card">
                <div class="card-header">
                  Enter an album information
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('addAlbum') }}">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Album Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="albumTitle" placeholder="">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Album Artist</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="albumArtist" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="albumGenre" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Year</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="albumYear" placeholder="">
                        </div>
                        <input type="submit" class="btn btn-primary " value="Submit">
                    </form>
                  {{-- <a href="{{ url('album_list') }}" class="btn btn-primary">Submit</a> --}}
                  
                </div>
              </div>
        </div>
@endsection --}}