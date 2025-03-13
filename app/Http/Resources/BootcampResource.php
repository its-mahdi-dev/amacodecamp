<?php

namespace App\Http\Resources;

use App\Models\Review;
use Illuminate\Http\Resources\Json\JsonResource;

class BootcampResource extends JsonResource
{

    protected $hasSeasons;

    public function __construct($resource, $hasSeasons = false)
    {
        parent::__construct($resource);
        $this->hasSeasons = $hasSeasons;
    }

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
        $result = [
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'thumbnail_url' => $this->thumbnail_url,
            'cover_url' => $this->cover_url,
            'intro' => $this->intro,
            'curriculum' => $this->curriculum,
            'body' => $this->body,
            'level' => $this->level,
            'duration' => $this->duration,
            'lessons' => $this->lessons,
            'level' => $this->level,
            'quizzes' => $this->quizzes,
            'certification' => $this->certification,
            'intro_video' => $this->intro_video,
            'price' => $this->price,
            'price_off' => $this->getPrice(),
            'off' => $this->off(),
            'students_count' => number_format($this->students()->count()),
            'teachers' => UserFilterResource::collection($this->teachers()->get()),
            'reviews' => ReviewResource::collection($reviews),
            "tags" => $this->tags,
            'category' => $this->category->name,
            "rate" => $rate
        ];

        if($this->hasSeasons){
            
            $sortedSeasons = $this->seasons->sortBy('order');
            $result["seasons"] = SeasonResource::collection($sortedSeasons);
        }

        return $result;
    }
}
