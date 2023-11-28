@extends('layouts.adminlayout')
@include('layouts.adminnavbar')
@section('content')
@include('layouts.adminsidebar')

<div class="container mt-4">
  {{-- <form method="POST" action="{{ route('addadminannouncement') }}">
    @csrf
    @method('post') --}}
    <h1 class="fw-bold pb-2">Announcements</h1>
<table class="table" id="announcementTable">
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
          <td> {{ $announcement->file_name }}</td>
          <td>{{ $announcement->date }}</td>
          <td>
              <div class="buttons d-flex flex-row gap-3">
                <div style="text-decoration: none; color: white;">
                  <button type="button" class="btn btn-success btn-sm">
                      <a href="{{ url('download', $announcement->file_name) }}" download style="color: white; text-decoration: none;">Download</a>
                  </button>
              </div>
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

<a href="/announcementupload" class="btn btn-primary">Upload</a>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script>
            let table = new DataTable('#announcementTable');
</script>
{{-- </form> --}}
@endsection 