@extends('layout')
@section('content')
@include('navbar')
<h1>this is the announcement page</h1>
<div class="container">
    <form method="POST" action="{{ route('addadminannouncement') }}">
      @csrf
      @method('post')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">File</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $announcement)
        <tr class="">
            <th scope="row">{{ $announcement->id }}</th>
            <td>{{ $announcement->file_name }}</td>
            <td>{{ $announcement->date }}</td>
      </tr>
      @endforeach
  </tbody>
  </table>
  </div>
  </form>
@endsection 