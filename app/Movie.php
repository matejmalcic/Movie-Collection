<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //protected $fillable = ['title', '']; all except ID
    //protected $casts = ['user_id' => 'int'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
