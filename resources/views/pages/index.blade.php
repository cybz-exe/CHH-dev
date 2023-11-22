@extends('adminlayout')
@section('content')
    @include('adminnavbar')
    @include('adminsidebar')
        <div class="container">
            <form method="GET" action="{{ route('search') }}" class=" col-md-3 offset-9 my-3">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
            <table class="table table-hover table-responsive mt-3">
                <thead class="">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Contact #</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $album)
                    <tr class="">
                        <th scope="row"><a href="{{ route('showAlbum', ['album' => $album])}}">{{ $album->id }}</a></th>
                        <td>{{ $album->name }}</td>
                        <td>{{ $album->last_name }}</td>
                        <td>{{ $album->contact }}</td>
                        <td>{{ $album->email }}</td>
                        <td>{{ $album->status }}</td>
                        <td>
                            <div class="buttons d-flex flex-row">
                                <a href="{{ route('update', ['album' => $album]) }}" class="btn btn-success btn-sm me-3" role="button">Update</a>
                                <form method="POST" action="{{ route('deleteAlbum', ['album' => $album]) }}">
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
        {{-- <button class="btn btn-outline-success d-flex offset-10" role="link">
            <a class="nav-link" aria-current="page" href="/adminmemberupdate">AddMember</a>
        </button> --}}

        </div>
@endsection