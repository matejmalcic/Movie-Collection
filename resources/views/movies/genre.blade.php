@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Add new genre</h4> 
                    <a class="btn" href="{{url('movies')}}">All Movies</a>
                    <a class="btn" href="{{url('movies/new')}}">Add new movie</a>
                </div>
                <div class="card-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Movie Form -->
                    <form action="{{ url('genre') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        <!-- Genre Name -->
                        <div class="form-group">
                            <label for="genre-name" class="col-sm-3 control-label">Genre Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="genre-name" class="form-control">
                            </div>

                        </div>

                        <!-- Add Movie Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-plus"></i>Add Genre
                                </button>
                            </div>
                        </div>
                    </form>
                    <table>
                    <thead>
                        <th>Genre</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                    @foreach($genres as $genres)
                    <tr>
                        <td class="table-text"><div>{{ $genres->name }}</div></td>
                        <td>
                        <button class="btn btn-success" disabled>
                            <i class="fa fa-btn fa-trash"></i>Edit
                        </button>
                        </td>
                        <td>
                        <button class="btn btn-danger" disabled>
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                        </td>
                        
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
