<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceDetail extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idAccidInvoiceDetailount' => $this->idInvoiceDetail,
            'idProduct' => $this->idProduct,
            'idInvoice' => $this->idInvoice,
            'Quantity' => $this->Quantity,
            'UnitPrice' => $this->UnitPrice,
          ];
    }
}
