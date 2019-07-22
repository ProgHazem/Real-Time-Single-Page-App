<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    // like function
    public function likeIt(Reply $reply)
    {
        $reply->likes()->create([
            'user_id' => auth()->id(),
        ]);
    }

    //unlike function
    public function unLikeIt(Reply $reply)
    {
        $reply->likes()->where([
            'user_id' => auth()->id()
        ])->first()->delete();
    }
}
