<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reply;
use App\Category;

class Question extends Model
{
    //relation with user
    public function user()
    {
        return $this->belongsTo('User::class');
    }
    //relation with replies
    public function replies()
    {
        return $this->hasMany('Reply::class');
    }
    //relation with category
    public function category()
    {
        return $this->belongsTo('Category::class');
    }
}
