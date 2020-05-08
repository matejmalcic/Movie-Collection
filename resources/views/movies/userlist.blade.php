@extends('layouts.app')

@section('content')

	@if (count($movies) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Movie List
                        <br>
                        <a href="{{url('movies')}}">All movies</a>
                        <a href="{{url('movies/new')}}">Add new movie</a>
                    </div>

                    <div class="panel-body">
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
                                        <td class="table-text"><div></div></td>
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
                </div>
            @endif
@endsection