<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetail extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idProductDetail' => $this->idProductDetail,
            'idProduct' => $this->idProduct,
            'PriceProduct' => $this->PriceProduct,
         ];
    }
}
