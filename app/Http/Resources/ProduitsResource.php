<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProduitsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'name' => $this->name,
        'picture' => $this->picture,
        'color' => $this->color,
        'description' => $this->description,
        'reference' => $this->reference,
        'price' => $this->price,
        'buying_price' => $this->buying_price,
        'stock' => $this->stock,
        'visible' => $this->visible,
        'brand_id' => $this->brand_id,
        'type_produits_id' => $this->type_produits_id,
        // Casting objects to string, to avoid receive create_at and update_at as object
        'created_at' => (string) $this->created_at,
        'updated_at' => (string) $this->updated_at
      ];
    }
}
