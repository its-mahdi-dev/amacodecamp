<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Morilog\Jalali\Jalalian;

class EpisodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            "title" => $this->title,
            "type" => $this->type,
            "body" => $this->body,
            "start_time" => $this->start_time,
            "end_time" => $this->end_time,
            "order" => $this->order,
            "created_at" => Jalalian::forge($this->created_at)->format('%A, %d %B %y'),
            "updated_at" => Jalalian::forge($this->updated_at)->format('%A, %d %B %y')
        ];
    }
}
