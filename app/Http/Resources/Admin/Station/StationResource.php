<?php

namespace App\Http\Resources\Admin\Station;

use App\Http\Resources\Admin\Governorate\GovernorateResource;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Station
 */
class StationResource extends JsonResource
{
    public function toArray($request): array
    {
        $attributes = $this->resource->getAttributes();
        $data = ['id' => $this->id];
        $fields = ['user_id', 'governorate_id', 'title', 'rating', 'image', 'address', 'is_active', 'created_at', 'updated_at'];

        foreach ($fields as $field) {
            if (array_key_exists($field, $attributes)) {
                $data[$field] = $this->{$field};
            }
        }

        $data['image'] = $this->image
            ? asset($this->image)
            : null;
        $data['governorate'] = new GovernorateResource($this->whenLoaded('governorate'));

        return $data;
    }
}
