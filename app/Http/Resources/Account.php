<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Account extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idAccount' => $this->idAccount,
            'FullName' => $this->FullName,
            'Email' => $this->Email,
            'PhoneNumber' => $this->PhoneNumber,
            'AddressUser' => $this->AddressUser,
            'PaswordUser' => $this->PaswordUser,
            'StatusAccount' => $this->StatusAccount,
            'token' => $this->token,
          ];
    }
}
