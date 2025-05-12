<?php

namespace App\Http\Resources;

use App\Models\Bootcamp;
use App\Models\BootcampUser;
use App\Models\Review;
use App\Models\Teacher;
use Illuminate\Http\Resources\Json\JsonResource;
use Laravel\Sanctum\PersonalAccessToken;
use Morilog\Jalali\Jalalian;

class BootcampResource extends JsonResource
{

    protected $hasSeasons;

    public function __construct($resource, $hasSeasons = false , $isStudent = false)
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

        $token = request()->bearerToken(); // Manually retrieve Bearer token
    $user = null;
    $isStudent = false;

    if ($token) {
        $accessToken = PersonalAccessToken::findToken($token);
        if ($accessToken) {
            $user = $accessToken->tokenable; // Retrieve user from token
        }
    }

    if ($user) {
        $bootcampUser = BootcampUser::where("bootcamp_id", $this->id)
            ->where("user_id", $user->id)
            ->first();

        $isStudent = $bootcampUser ? true : false;
    }

        $reviews = $this->reviews()->get();
        $rate = 5;
        if (count($reviews) > 0) {
            foreach ($reviews as $r) {
                $rate += $r->rating;
            }
            $rate = $rate / (count($reviews)+1);
        }
        $result = [
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'thumbnail_url' => $this->thumbnail_url,
            'cover_url' => $this->cover_url,
            'intro' => $this->intro,
            'body' => $this->body,
            'level' => $this->level,
            'duration' => $this->duration,
            'lessons' => $this->lessons,
            'level' => $this->level,
            'quizes' => $this->quizzes,
            'certification' => $this->certification,
            'intro_video' => $this->intro_video,
            'price' => $this->price,
            'price_off' => $this->getPrice(),
            'off' => new OffResource($this->off),
            'capacity' => $this->capacity,
            'students_count' => number_format($this->students()->count()),
            'teachers' => TeacherResource::collection($this->teachers()->get()),
            'reviews' => ReviewResource::collection($reviews),
            "tags" => TagResource::collection($this->tags()->get()),
            'category' => $this->category->name,
            "rate" => $rate,
            "is_student" => $isStudent,
            "is_login" =>  $user ? true : false,
            "start_time" => Jalalian::forge($this->start_time)->format('%A, %d %B %y'),
            "created_at" => Jalalian::forge($this->created_at)->format('%A, %d %B %y'),
            "updated_at" => Jalalian::forge($this->updated_at)->format('%A, %d %B %y')
        ];


        if($this->hasSeasons){
            
            $sortedSeasons = $this->seasons->sortBy('order');
            $result["seasons"] = SeasonResource::collection($sortedSeasons);
        }

        return $result;
    }
}
