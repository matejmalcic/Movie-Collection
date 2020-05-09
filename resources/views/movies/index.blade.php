@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Movie List</h4> 
                    <a class="btn" href="{{url('movies/userlist/' . Auth::user()->id )}}">My Movies</a>
                    <a class="btn" href="{{url('movies/new')}}">Add new movie</a>
                </div>
                @if (count($movies) > 0)
                <div class="card-body">
                <table class="table table-striped task-table">
                            <thead>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Genre</th>
                                <th>Year</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($movies as $movie)
                                    <tr>
                                        <td class="table-text"><div><img style="max-width: 200px" src="" alt="image"> </div></td>
                                        <td class="table-text"><div>{{ $movie->title }}</div></td>
                                        <td class="table-text"><div>{{ $movie->genre_id }}</div></td>
                                        <td class="table-text"><div>{{ $movie->year }}</div></td>
                                        <td class="table-text"><div>{{ $movie->duration }}</div></td>

                                         <!-- Movie Delete Button -->
                                        <td>                                            
                                            <form action="{{url('movie/' . $movie->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-movie-{{ $movie->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection