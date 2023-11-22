{{-- @extends('adminlayout')

@include('adminnavbar')
@section('content')
@include('adminsidebar')
<div class="container">
    <table class="table table-hover table-responsive mt-3">
        <thead class="">
            <tr>
                <th scope="col">Album ID</th>
                <th scope="col">Name</th>
                <th scope="col">Artist</th>
                <th scope="col">Genre</th>
                <th scope="col">Year</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $album)
            <tr class="">
                <th scope="row"><a href="{{ route('showAlbum', ['album' => $album])}}">{{ $album->id }}</a></th>
                <td>{{ $album->album_title }}</td>
                <td>{{ $album->album_artist }}</td>
                <td>{{ $album->genre }}</td>
                <td>{{ $album->year }}</td>
                <td>
                    <div class="buttons d-flex flex-row">
                        <a href="{{ route('update', ['album' => $album]) }}" class="btn btn-success btn-sm me-3" role="button">Update</a>
                        <form method="POST" action="{{ route('deleteAlbum', ['album' => $album]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                            <a href="{{ route('deleteAlbum', ['album' => $album]) }}" class="btn btn-danger btn-sm" role="button">Delete</a>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<style>
    .box{
        background-color: red;
        width: 300px;
        height: 150px;
    }
</style>
@endsection  --}}
