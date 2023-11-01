<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'username' => $this->user->username,
            'slug' => $this->slug,
            'url' => $this->url,
            'votes' => $this->votes,
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'postVotes' => $this->whenLoaded('postVotes'),
            'created_at' => $this->created_at->diffForHumans(),
        ];
    
    }
}