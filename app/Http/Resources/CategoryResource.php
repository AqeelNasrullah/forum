<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'title'             =>      $this->title,
            'slug'              =>      asset("/api/categories/$this->slug"),
            'created_at'        =>      $this->created_at
        ];
    }
}