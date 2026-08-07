<?php

namespace App\Http\Resources\Admin\Order;

use App\Http\Resources\Admin\User\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Order
 */
class OrderResource extends JsonResource
{
    public function toArray($request): array
    {
        $attributes = $this->resource->getAttributes();
        $data = ['id' => $this->id];
        $fields = ['user_id', 'driver_id', 'station_id', 'destination', 'departure_time', 'total_seats', 'day', 'available_seats', 'seat_price', 'status', 'type', 'notes', 'created_at', 'updated_at'];

        foreach ($fields as $field) {
            if (array_key_exists($field, $attributes)) {
                $data[$field] = $this->{$field};
            }
        }

        $data['driver'] = new UserResource($this->whenLoaded('driver'));

        return $data;
    }
}
