<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminAccount extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idAdminAccount' => $this->idAdminAccount,
            'UserNameAdmin' => $this->UserNameAdmin,
            'PasswordAdmin' => $this->PasswordAdmin,
            'token' => $this->token,
          ];
    }
}
