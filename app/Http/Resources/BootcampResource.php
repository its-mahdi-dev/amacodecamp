<?php

namespace App\Http\Resources;

use App\Models\Review;
use Illuminate\Http\Resources\Json\JsonResource;

class BootcampResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array<string, mixed>
     */
    public function toArray($request)
    {

        $reviews = $this->reviews()->get();
        $rate = 0;
        if (count($reviews) > 0) {
            foreach ($reviews as $r) {
                $rate += $r->rating;
            }
            $rate = $rate / count($reviews);
        }
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'thumbnail_url' => $this->thumbnail_url,
            'cover_url' => $this->cover_url,
            'overview' => $this->overview,
            'curriculum' => $this->curriculum,
            'level' => $this->level,
            'duration' => $this->duration,
            'lessons' => $this->lessons,
            'quizzes' => $this->quizzes,
            'certification' => $this->certification,
            'intro_video' => $this->intro_video,
            'price' => $this->price,
            'students_count' => $this->students()->count(),
            'teachers' => UserFilterResource::collection($this->teachers()->get()),
            'reviews' => ReviewResource::collection($reviews),
            "rate" => $rate
        ];
    }
}
