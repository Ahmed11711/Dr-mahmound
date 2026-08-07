<?php

namespace App\Http\Resources\Admin\Chapter;

use App\Http\Resources\Admin\Courses\CoursesResource;
use App\Http\Resources\Admin\Lessons\LessonsResource;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Chapter
 */
class ChapterResource extends JsonResource
{
    public function toArray($request): array
    {
        $attributes = $this->resource->getAttributes();
        $data = ['id' => $this->id];
        $fields = ['course_id', 'name', 'order', 'created_at', 'updated_at'];

        foreach ($fields as $field) {
            if (array_key_exists($field, $attributes)) {
                $data[$field] = $this->{$field};
            }
        }

        $data['course'] = CoursesResource::make($this->whenLoaded('course'));
        $data['lesone'] = LessonsResource::collection($this->whenLoaded('lesone'));
        return $data;
    }
}
