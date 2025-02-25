<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OtpValidationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Accessing the array passed to the resource
        return [
            'token' => $this->resource['token'],   // Access token from the array
            'is_new' => $this->resource['is_new'], // Access is_new from the array
        ];
    }
}
