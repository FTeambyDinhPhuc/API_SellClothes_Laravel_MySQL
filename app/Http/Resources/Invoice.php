<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Invoice extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idInvoice' => $this->idInvoice,
            'InvoiceNameReceiver' => $this->InvoiceNameReceiver,
            'InvoiceAddressReceiver' => $this->InvoiceAddressReceiver,
            'InvoicePhoneReceiver' => $this->InvoicePhoneReceiver,
            'InvoiceDate' => $this->InvoiceDate->format('d/m/Y H:i:s'),
            'TotalInvoice' => $this->TotalInvoice,
            'PaymentsInvoice' => $this->PaymentsInvoice,
            'StatusInvoice' => $this->StatusInvoice,
            'Paid' => $this->Paid,
            'NoteInvoice' => $this->NoteInvoice,
            'idAccount' => $this->idAccount,
          ];
    }
}
