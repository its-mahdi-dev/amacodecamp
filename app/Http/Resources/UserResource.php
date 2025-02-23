<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'avatar_url' => $this->avatar_url,
            'phone' => $this->phone,
            'email' => $this->email,
            'role' => $this->role,
            'bootcamps' => BootcampResource::collection($this->whenLoaded('bootcamps')),
            'wishlist' => BootcampResource::collection($this->whenLoaded('wishlist')),
            'basket' => BootcampResource::collection($this->whenLoaded('basket')),
            'reviews' => ReviewResource::collection($this->whenLoaded('reviews')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
