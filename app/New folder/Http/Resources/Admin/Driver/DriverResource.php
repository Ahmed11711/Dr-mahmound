<?php

namespace App\Http\Resources\Admin\Driver;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
{
    public function toArray($request): array
    {
        $attributes = $this->resource->getAttributes();
        $data = ['id' => $this->id];
        $fields = ['name', 'email', 'phone', 'image', 'whtsapp', 'is_active', 'email_verified_at', 'remember_token', 'role', 'social_type', 'social_id', 'parent_id', 'created_at', 'updated_at'];

        foreach ($fields as $field) {
            if (array_key_exists($field, $attributes)) {
                $data[$field] = $this->{$field};
            }
        }
        $data['image'] = $this->image
            ? asset($this->image)
            : null;
        return $data;
    }
}
