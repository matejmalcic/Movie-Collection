@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div class="links">
                    <a href="{{url('movies')}}">Movie List</a>
                    <a href="{{url('movies/userlist/' . Auth::user()->id )}}">My Movies</a>
                    <a href="{{url('movies/new')}}">Insert new movie</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
