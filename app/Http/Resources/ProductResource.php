<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'image' => $this->image,
            'price' => (double) $this->price,
            'rate' => $this->rate,
            'offerPrice' => $this->offerPrice,
            'hasOffer' => $this->hasOffer,
            'offerDiscount' => $this->offerDiscount,
            'category_uuid' => $this->category_uuid,
        ];
    }
}
