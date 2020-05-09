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

    //treba testirati
    public function forAll()
    {
        return Movie::where('id', '<>', 0) -> orderBy('title', 'asc') -> get();
    } 
}
