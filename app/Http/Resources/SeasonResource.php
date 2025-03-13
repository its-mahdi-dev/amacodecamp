<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SeasonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $sortedEpisodes = $this->episodes->sortBy('order');

        return [
            "title" => $this->title,
            "order" => $this->order,
            "episodes" => EpisodeResource::collection($sortedEpisodes)
        ];
    }
}
