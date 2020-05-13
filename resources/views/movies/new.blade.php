@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Add new movie</h4> 
                    <a class="btn" href="{{url('movies')}}">All Movies</a>
                    <a class="btn" href="{{url('movies/userlist/' . Auth::user()->id )}}">My Movies</a>
                </div>
                <div class="card-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Movie Form -->
                    <form action="{{ url('movie') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        <!-- Movie Title -->
                        <div class="form-group">
                            <label for="movie-title" class="col-sm-3 control-label">Movie Title</label>

                            <div class="col-sm-6">
                                <input type="text" name="title" id="movie-title" class="form-control">
                            </div>

                        </div>

                        <!-- Movie Genre -->
                        <div class="form-group">
                            <label for="movie-genre" class="col-sm-3 control-label">Genre</label>
                            <div class="col-sm-6">
                                <select name="genre" id="movie-genre">
                                    <?php foreach ($genres as $genre){
                                        echo '<option value="' . $genre->id . '">' . $genre->name . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <!-- Year -->
                        <div class="form-group">
                            <label for="movie-year" class="col-sm-3 control-label">Year</label>
                            <div class="col-sm-6">
                                <select name="year" id="movie-year">
                                    <?php for ($year = date('yy'); $year >= 1900 ; $year--){ 
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Movie Duration -->
                        <div class="form-group">
                            <label for="movie-duration" class="col-sm-3 control-label">Duration in minutes</label>
                            <div class="col-sm-6">
                                <input type="number" name="duration" id="movie-duration" min="0" class="form-control">
                            </div>
                        </div> 

                        <!-- Movie Image -->
                        <div class="form-group">               
                            <label for="movie-image" class="col-sm-3 control-label">Image</label>
                            <div class="col-sm-6">
                                <input type="file" name="image" id="movie-image" class="form-control">
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
</div>
@endsection
