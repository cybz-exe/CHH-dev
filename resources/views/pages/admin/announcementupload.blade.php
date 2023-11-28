@extends('layouts.adminlayout')
@include('layouts.adminnavbar')
@section('content')
@include('layouts.adminsidebar')

<h1 class="text-center mt-5">Upload Announcement</h1>
<div class="container mt-5">
  <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')
{{-- <h1>Sample</h1> --}}
<div class="card">
  <div class="offset-11 mt-4">
    <a href="/adminannouncement"><i class="fa-regular fa-circle-xmark fa-xl"></i></a>
</div>
<div class=" d-flex justify-content-center" style="margin-top: 50px;" > 
    <div class="box">
        <i class="fa-solid fa-arrow-up-from-bracket fa-2xl icon"></i>
    </div>
</div>
<div class="row mt-5 d-flex justify-content-center">
<div class="col-md-7 ">
    <label for="inputPassword4" class="form-label">Publish</label>
    <input type="file" class="form-control mb-5" id="inputPassword4" name="file_name" accept=".pdf, .doc, .docx" title="Only documents are allowed" >
  </div>
  <input type="hidden" name="date" value="{{ $announcement->date ?? now()->format('Y-m-d') }}">

</div>
<button type="submit" class="btn btn-primary col-md-2 offset-7 mb-5">Upload File</button>

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