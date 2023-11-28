@extends('layouts.adminlayout')
@include('layouts.adminnavbar')
@section('content')
@include('layouts.adminsidebar')

<div class="container mt-4">
  <div class="container">
    <h1 class="fw-bold pb-3">Proposed Events</h1>
    <table class="table" id="proposalTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Event Name</th>
            <th scope="col">Description</th>
            <th scope="col">Date Submitted</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $proposal)
            <tr>
                <th scope="row"><a href="{{ route('showProposal', ['proposal' => $proposal])}}">{{ $proposal->id }}</a></th>
                <td>{{ $proposal->event_name }}</td>
                <td>{{ $proposal->event_description }}</td>
                <td>{{ $proposal->created_at }}</td>
                <td>
                    <div class="buttons d-flex flex-row">
                        <form method="POST" action="{{ route('deleteProposal', ['proposal' => $proposal]) }}">
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
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script>
            let table = new DataTable('#proposalTable');
</script>
@endsection