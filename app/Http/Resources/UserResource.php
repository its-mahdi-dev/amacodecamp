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
            'avatar' => $this->avatar,
            'phone' => $this->phone,
            'email' => $this->email,
            'role' => $this->role,
            'full_name' => $this->getFullName(),
            'bootcamps' => BootcampResource::collection($this->bootcamps()->get()),
            'wishlist' => BootcampResource::collection($this->wishlist()->get()),
            'reviews' => ReviewResource::collection($this->reviews()->get()),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
