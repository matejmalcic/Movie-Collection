@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add new movie
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Movie Form -->
                    <form action="{{ url('movie') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Movie Title -->
                        <div class="form-group">
                            <label for="movie-title" class="col-sm-3 control-label">Movie Title</label>

                            <div class="col-sm-6">
                                <input type="text" name="title" id="movie-title" class="form-control" value="{{ old('movie') }}">
                            </div>

                        </div>
                        
                        <!-- Movie Genre -->
                        <div class="form-group">
                            <label for="movie-genre" class="col-sm-3 control-label">Genre</label>
                            <div class="col-sm-6">
                                <input type="text" name="genre" id="movie-genre" class="form-control" value="">
                            </div>
                        </div> 

                        <!-- Add Movie Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-plus"></i>Add Movie
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
