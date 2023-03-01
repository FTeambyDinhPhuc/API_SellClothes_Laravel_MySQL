<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idProduct' => $this->idProduct,
            'NameProduct' => $this->NameProduct,
            'PriceProduct' => $this->PriceProduct,
            'ImageProduct' => $this->ImageProduct,
            'DescribeProduct' => $this->DescribeProduct,
            'StatusProduct' => $this->StatusProduct,
            'idProductType' => $this->idProductType,
            'CreateDate' => $this->CreateDate->format('d/m/Y H:i:s'),
            'UpdateDate' => $this->UpdateDate->format('d/m/Y H:i:s'),
          ];
    }
}
