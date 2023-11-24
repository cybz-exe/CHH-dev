@extends('adminlayout')

@include('adminnavbar')
@section('content')
@include('adminsidebar')
<div class="container">
<table class="table" id="proposalTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">event_name</th>
        <th scope="col">event_description</th>
        <th scope="col">date submitted</th>
        <th scope="col">Option</th>
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
                    {{-- <a href="{{ route('update', ['album' => $album]) }}" class="btn btn-success btn-sm me-3" role="button">Update</a> --}}
                    <form method="post" action="{{ route('deleteProposal', ['proposal' => $proposal]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        {{-- <a href="{{ route('deleteAlbum', ['album' => $album]) }}" class="btn btn-danger btn-sm" role="button">Delete</a> --}}
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script>
            let table = new DataTable('#proposalTable');
</script>
@endsection