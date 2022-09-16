<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IgracResource extends JsonResource
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
            'ime' => $this->resource->ime,
            'prezime' => $this->resource->prezime,
            'summoner_name' => $this->resource->summoner_name,
            'pozicija' => $this->resource->pozicija,
            'tim' => new TimResource($this->resource->tim)
        ];
    }
}
