<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CampaignResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identify' => $this->id,
            'campaignName' => $this->campaignName,
            'npcs' => $this->npcs,
            'playerCharacters' => $this->playerCharacters,
            'plots' => $this->plots,
            'description' => $this->description,
        ];
    }
}
