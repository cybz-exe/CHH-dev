@extends('adminlayout')

@include('adminnavbar')
@section('content')
<h1 class="text-center mt-5">Upload Announcement</h1>
<div class="container mt-5">
<form method="POST" action="{{ route('addadminannouncement') }}">
    @csrf
    @method('post')
{{-- <h1>Sample</h1> --}}
<div class="card">
<div class=" d-flex justify-content-center" style="margin-top: 50px;" > 
    <div class="box">
        <i class="fa-solid fa-arrow-up-from-bracket fa-2xl icon"></i>

    </div>
</div>
<div class="row mt-5 d-flex justify-content-center">
<div class="col-md-7 ">
    <label for="inputPassword4" class="form-label">Publish</label>
    <input type="file" class="form-control mb-5" id="inputPassword4" name="file_name">
  </div>
  <input type="hidden" name="date" value="{{ $announcement->date ?? now()->format('Y-m-d') }}">

</div>
<button type="submit" class="btn btn-primary col-md-2 offset-7 mb-5">Sign in</button>

</div>

</form>

</div>
<style>
.icon{
  position: absolute;
  top: 50%;
  left: 50%;
font-size: 70px;
margin: 0 0 0 -30px;

}
.box{
  position: relative;
width: 600px;
height: 200px;
background-color:#D3D3D3;
}

</style>


@endsection