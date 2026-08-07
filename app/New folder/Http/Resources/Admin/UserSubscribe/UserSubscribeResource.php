<?php

namespace App\Http\Resources\Admin\UserSubscribe;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\UserSubscribe
 */
class UserSubscribeResource extends JsonResource
{
    public function toArray($request): array
    {
        $attributes = $this->resource->getAttributes();
        $data = ['id' => $this->id];
        $fields = ['user_id', 'course_id', 'payment_method', 'status', 'admin_note', 'created_at', 'updated_at'];

        foreach ($fields as $field) {
            if (array_key_exists($field, $attributes)) {
                $data[$field] = $this->{$field};
            }
        }
        $data['receipt_image'] = $this->receipt_image ? asset($this->receipt_image) : null;
        $data['user'] = $this->whenLoaded('user');

        return $data;
    }
}
