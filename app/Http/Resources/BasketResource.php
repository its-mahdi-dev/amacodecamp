<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Morilog\Jalali\Jalalian;

class BasketResource extends JsonResource
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
            'user_id' => $this->user_id,
            'quantity' => $this->quantity,
            "created_at" => Jalalian::forge($this->created_at)->format('%A, %d %B %y'),
            "updated_at" => Jalalian::forge($this->updated_at)->format('%A, %d %B %y')
        ];
    }
}

