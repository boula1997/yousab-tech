<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "image" => $this->file->url,
            "title" => $this->title,
            "subtitle" => $this->subtitle,
            "identifier" => $this->identifier,
            "description" => $this->description,
        ];
    }
}
