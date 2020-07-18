<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TraductionResource extends JsonResource
{

    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'text' => $this->text,
            'lang' => $this->lang,
            'details' => $this->details,
            'bambara' => $this->whenLoaded('bambara'),
        ];
    }
}
