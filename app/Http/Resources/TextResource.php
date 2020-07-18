<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TextResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // dd($this);
        // return parent::toArray($request);
        //dd($this->get());
        return [
            'id' => $this->id,
            'text' => $this->text,
            'details' => $this->details,
            'traductions' => TraductionResource::collection($this->whenLoaded('traductions')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
