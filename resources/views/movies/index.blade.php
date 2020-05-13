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
                <div class="links">
                    <!-- Alphabetical paging -->
                </div>
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
                                        <td><img src="{{ asset('storage/images/'. $movie->image) }}" height="180" width="140"></td>
                                        <td style="vertical-align:inherit">{{ $movie->title }}</td>
                                        <td style="vertical-align:inherit">{{ $movie->genre_id }}</td>
                                        <td style="vertical-align:inherit">{{ $movie->year }}</td>
                                        <td style="vertical-align:inherit">{{ $movie->duration }} min</td>

                                         <!-- Movie Delete Button -->
                                        <td style="vertical-align:inherit">                                            
                                            <form action="{{url('movie/' . $movie->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                @if(auth()->user()->id === $movie->user_id)
                                                <button type="submit" id="delete-movie-{{ $movie->id }}" class="btn btn-danger">
                                                @else
                                                <button type="submit" id="delete-movie-{{ $movie->id }}" class="btn btn-danger" disabled>
                                                @endif
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