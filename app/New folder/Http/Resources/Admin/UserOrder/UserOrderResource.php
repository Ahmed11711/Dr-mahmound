<?php

namespace App\Http\Resources\Admin\UserOrder;

use App\Http\Resources\Admin\Order\OrderResource;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\UserOrder
 */
class UserOrderResource extends JsonResource
{
    public function toArray($request): array
    {
        $attributes = $this->resource->getAttributes();
        $data = ['id' => $this->id];
        $fields = ['user_id', 'order_id', 'seats_count', 'price', 'payment_status', 'payment_method', 'transaction_id', 'status', 'created_at', 'updated_at'];

        foreach ($fields as $field) {
            if (array_key_exists($field, $attributes)) {
                $data[$field] = $this->{$field};
            }
        }
        $data['order'] = new OrderResource($this->whenLoaded('order'));  // 
        return $data;
    }
}
