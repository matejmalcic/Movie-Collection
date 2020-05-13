<?php

namespace App\Repositories;

use App\User;
use App\Movie;

class MovieRepository
{
    public function forUser(User $user)
    {
        return Movie::where('user_id', $user->id) -> orderBy('title', 'asc') -> get();
    } 

    public function forAll()
    {
        return Movie::orderBy('title', 'asc') -> get();
    } 
}
