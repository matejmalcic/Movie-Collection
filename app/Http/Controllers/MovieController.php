<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie; 
use App\Repositories\MovieRepository;

class MovieController extends Controller
{
    protected $movies;

    public function __construct(MovieRepository $movies)
    {
        $this->middleware('auth');

        $this->movies= $movies;
    }

    public function index (Request $request)
    {
        return view('movies.index', [
            'movies' => $this->movies->forAll($request->user()),
        ]);
    }

    public function userlist (Request $request)
    {
        return view('movies.userlist', [
            'movies' => $this->movies->forUser($request->user()),
        ]);
    }

    public function new ()
    {
        return view('movies.new');
    }
}
