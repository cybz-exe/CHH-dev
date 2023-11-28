@extends('layouts.layout')
@section('content')
@include('layouts.navbar')
<div class="container mt-4">
  <h1 class="fw-bold pb-2">Announcements</h1>
    <form method="POST" action="{{ route('addadminannouncement') }}">
      @csrf
      @method('post')
  <table class="table" id="memberAnnouncementTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">File</th>
        <th scope="col">Date</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $announcement)
        <tr class="">
            <td scope="row">{{ $announcement->id }}</td>
            <td>{{ $announcement->file_name }}</a></td>
            <td>{{ $announcement->date }}</td>
            <td>
              <div style="text-decoration: none; color: white;">
                <button type="button" class="btn btn-success">
                    <a href="{{ url('download', $announcement->file_name) }}" download style="color: white; text-decoration: none;">Download</a>
                </button>
            </div>
          </td>
      </tr>
      @endforeach
  </tbody>
  </table>
  </div>
  </form>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script>
            let table = new DataTable('#memberAnnouncementTable');
        </script>
@endsection 