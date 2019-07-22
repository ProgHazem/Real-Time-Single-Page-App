<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class replyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'body'=> $this->body,
            'user'=> $this->user->name,
            'question'=> $this->question->title,
            'created_at'=> $this->created_at->diffForHumans(),
        ];
    }
}
