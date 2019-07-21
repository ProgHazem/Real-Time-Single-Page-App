<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\User;


class Reply extends Model
{
    //relation with Like
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    //relation with question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    //relation with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
