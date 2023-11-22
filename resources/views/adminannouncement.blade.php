@extends('adminlayout')

@include('adminnavbar')
@section('content')
@include('adminsidebar')

<div class="container">
  {{-- <form method="POST" action="{{ route('addadminannouncement') }}">
    @csrf
    @method('post') --}}
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">File Name</th>
      <th scope="col">Date</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($data as $announcement)
      <tr class="">
          <th scope="row">{{ $announcement->id }}</th>
          <td>{{ $announcement->file_name }}</td>
          <td>{{ $announcement->date }}</td>
          <td>
              <div class="buttons d-flex flex-row">
                {{-- <a href="{{ url('upload', $announcement->file) }}" class="btn btn-success me-3">Download</a> --}}
                <a href="{{ url('download', $announcement->file) }}" class="btn btn-success me-3">Download</a>
            <form method="POST" action="{{ route('deleteAnnouncement', ['announcement' => $announcement]) }}">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
          </form>
              </div>
          </td>
    </tr>
    @endforeach
</tbody>
</table>

  <a href="/announcementupload">Upload</a>
</div>
{{-- </form> --}}
@endsection 