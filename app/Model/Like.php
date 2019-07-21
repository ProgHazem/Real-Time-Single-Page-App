<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Reply;

class Like extends Model
{
    public function reply() {
        return $this->belongsTo('Reply::class');
    }
}
