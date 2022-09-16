<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TimResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'ime_tima' => $this->resource->ime_tima,
            'region' => $this->resource->region,
            'drzava' => $this->resource->drzava,
            'vlasnik' => $this->resource->vlasnik
        ];
    }
}
