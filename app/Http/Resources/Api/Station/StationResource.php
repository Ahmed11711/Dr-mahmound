<?php

namespace App\Http\Resources\Api\Station;

use App\Http\Resources\Admin\Order\OrderResource;
use App\Http\Resources\Api\goverment\govermentResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'image' => $this->image
                ? asset($this->image)
                : null,
            'rating' => $this->rating ?? null,
            'address' => $this->address,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at,
            'governorate' => new govermentResource($this->whenLoaded('governorate')),
            'orders' => OrderResource::collection($this->whenLoaded('orders')),

        ];
    }
}
