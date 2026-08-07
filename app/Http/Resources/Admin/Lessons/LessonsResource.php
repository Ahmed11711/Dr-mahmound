<?php

namespace App\Http\Resources\Admin\Lessons;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

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
    $userId = auth('api')->id();

    if (!$isFree) {
        if (!$userId) return null;

        $isSubscribed = $this->resource->chapter->course->userSubscribes()
            ->where('user_id', $userId)
            ->where('status', 'approved')
            ->exists();

        if (!$isSubscribed) return null;
    }

    // معرف مؤقت للمستخدم (0 لو ضيف بيشوف درس مجاني)
    $uid = $userId ?? 0;

    // نسجل IP الطالب اللي طلب الرابط عشان نتأكد منه وقت التشغيل
    cache()->put(
        "lesson_access_{$this->id}_{$uid}",
        request()->ip(),
        now()->addMinutes(3)
    );

    return \Illuminate\Support\Facades\URL::temporarySignedRoute(
        'lesson.stream',
        now()->addMinutes(3),
        ['id' => $this->id, 'uid' => $uid]
    );
}
}