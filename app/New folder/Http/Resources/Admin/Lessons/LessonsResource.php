<?php

namespace App\Http\Resources\Admin\Lessons;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Lessons
 */
class LessonsResource extends JsonResource
{
    public function toArray($request): array
    {
        $attributes = $this->resource->getAttributes();
        $data = ['id' => $this->id];
        $fields = ['chapter_id', 'title', 'is_free', 'info', 'order', 'created_at', 'updated_at'];

        foreach ($fields as $field) {
            if (array_key_exists($field, $attributes)) {
                $data[$field] = $this->{$field};
            }
        }

        $data['video_path'] = $this->resolveVideoPath();

        return $data;
    }

    private function resolveVideoPath(): ?string
    {
        if (!$this->video_path) return null;

        $isFree = (bool) $this->is_free;

        if ($isFree) {
            return asset('storage/' . $this->video_path);
        }

        $userId = auth('api')->id();

        if (!$userId) return null;

        $isSubscribed = $this->resource->chapter->course->userSubscribes()
            ->where('user_id', $userId)
            ->where('status', 'approved')
            ->exists();

        return $isSubscribed ? asset('storage/' . $this->video_path) : null;
    }
}
