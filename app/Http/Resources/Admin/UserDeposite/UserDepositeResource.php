<?php

namespace App\Http\Resources\Admin\UserDeposite;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\UserDeposite
 */
class UserDepositeResource extends JsonResource
{
    public function toArray($request): array
    {
        $attributes = $this->resource->getAttributes();
        $data = ['id' => $this->id];
        $fields = ['user_id', 'amount', 'user_phone', 'company_phone', 'status', 'type', 'note', 'created_at', 'updated_at'];

        foreach ($fields as $field) {
            if (array_key_exists($field, $attributes)) {
                $data[$field] = $this->{$field};
            }
        }
        $data['image'] = $this->image ? asset($this->image) : null;

        return $data;
    }
}