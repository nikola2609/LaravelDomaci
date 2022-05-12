<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IspitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
        'id'=>$this->resource->id,
        'naziv_predmeta'=>$this->resource->naziv_predmeta,
        'katedra'=>$this->resource->katedra,
        'semestar'=>$this->resource->semestar,
        'godina_studija'=>$this->resource->godina_studija,
        'espb'=>$this->resource->espb
        ]
         
        
    }
}
