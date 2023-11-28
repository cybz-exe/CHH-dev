@extends('layouts.adminlayout')
@section('content')
    @include('layouts.adminnavbar')
    @include('layouts.adminsidebar')
        <div class="container mt-4">
            <div class="container">
                <h1 class="fw-bold pb-2">List of Members</h1>
                <table class="table table-hover table-responsive" id="memberTable">
                    <thead class="">
                        <tr>
                            <th></th>
                            <th>#</th>
                            <th scope="col">Info</th>
                            <th scope="col">Image</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Contact #</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $member)
                        <tr class="">
                            <th></th>
                            <th>{{ $loop->iteration }}</th>
                            <th scope="row"><a href="{{ route('showMember', ['member' => $member])}}"><i class="fa-solid fa-eye" style="color: #1c6bf2;"></i></a></th>
                            <td>
                                <img src="{{ $member->image }}" width="70px" height="70px" alt="image">
                            </td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->last_name }}</td>
                            <td>{{ $member->contact }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->status }}</td>
                            <td>
                                <div class="buttons d-flex flex-row">
                                    <a href="{{ route('update', ['member' => $member]) }}" class="btn btn-success btn-sm me-3" role="button">Update</a>
                                    <form method="POST" action="{{ route('deleteMember', ['member' => $member]) }}">
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
            let table = new DataTable('#memberTable');
        </script>
@endsection
