<?php

namespace App\Http\Resources;

use App\Http\Resources\Custom\ShareResource;

class UserResource extends ShareResource
{
    /**
     * Transform the resource into an array.
     *
     * @var  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function toArray($request) // @codingStandardsIgnoreLine
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
        ];
    }
}
