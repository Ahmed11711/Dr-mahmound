<?php

namespace App\Http\Resources\Admin\Courses;

use App\Http\Resources\Admin\Chapter\ChapterResource;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Courses
 */
class CoursesResource extends JsonResource
{
    public function toArray($request): array
    {
        $attributes = $this->resource->getAttributes();
        $data = ['id' => $this->id];
        $fields = ['title', 'description', 'duration_hours', 'price', 'discount_price', 'discount_start', 'discount_end', 'info', 'rating', 'created_at', 'updated_at'];

        foreach ($fields as $field) {
            if (array_key_exists($field, $attributes)) {
                $data[$field] = $this->{$field};
            }
        }
        $data['image'] = $this->image ? asset(ltrim($this->image, '/')) : null;
        $data['file_path'] = $this->file_path ? asset(ltrim($this->file_path, '/')) : null;
        $data['chapter'] = ChapterResource::collection($this->whenLoaded('chapter'));
        $data['is_subscribed'] = $this->isSubscribedByAuthUser();
        $data['subscription_status'] = $this->getSubscriptionStatus();
        return $data;
    }
    private function isSubscribedByAuthUser(): bool
    {
        $userId = auth('api')->id();
        if (!$userId) return false;

        return $this->resource->userSubscribes()
            ->where('user_id', $userId)
            ->whereIn('status', ['pending', 'approved'])
            ->exists();
    }
    private function getSubscriptionStatus(): ?string
    {
        $userId = auth('api')->id();
        if (!$userId) return null;

        $subscription = $this->resource->userSubscribes()
            ->where('user_id', $userId)
            ->latest()
            ->first();

        return $subscription?->status; // 'pending' | 'approved' | 'rejected' | null
    }
}
