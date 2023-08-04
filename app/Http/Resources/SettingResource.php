<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "email1" => $this->email1,
            "email2" => $this->email2,
            "facebook" => $this->facebook,
            "image" => $this->image,
            "instgram" => $this->instgram,
            "logo" => $this->logo,
            "map" => $this->map,
            "phone1" => $this->phone1,
            "phone2" => $this->phone2,
            "phone3" => $this->phone3,
            "tab" => $this->tab,
            "tiktok" => $this->tiktok,
            "twitter" => $this->twitter,
            "youtube" => $this->youtube,
            "address" => $this->address,
            "appointment1" => $this->appointment1,
            "appointment2" => $this->appointment2,
            "description" => $this->description,
            "meta_data" => $this->meta_data,
            "title" => $this->title,
        ];
    }
}
