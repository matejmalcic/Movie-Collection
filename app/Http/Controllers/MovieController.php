<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Movie; 
use App\Genre;
use App\User;
use App\Repositories\MovieRepository;
//use App\Repositories\GenreRepository;

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

    public function new()
    {
        $genres = DB::table('genres')->get();

        return view('movies.new', ['genres' => $genres]);
    }

    public function add (Request $request) //popraviti tablicu, staviti genre_id i spojiti tablice
    {   
        DB::table('movies')->insert([
            'title' => $request->title,
            'genre_id' => $request->genre,
            'user_id' => Auth::user()->id,
            'year' => $request->year,
            'duration' => $request->duration,
            'image' => $request->image,
        ]);
        

        return redirect('/movies');
    }
}
