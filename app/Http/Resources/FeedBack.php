<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FeedBack extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idFeedBack' => $this->idFeedBack,
            'FullNameUserFeedBack' => $this->FullNameUserFeedBack,
            'EmailUserFeedBack' => $this->EmailUserFeedBack,
            'DescribeFeedback' => $this->DescribeFeedback,
          ];
    }
}
