<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'avatar_url' => $this->avatar_url,
            'avatar' => $this->avatar,
            'email' => $this->email,
            'role' => $this->role,
            'bio' => $this->bio,
            'cv' => $this->cv_url,
            'full_name' => $this->getFullName(),
        ];
    }
}
