<?php

namespace App\Http\Requests\Admin\Lessons;

use App\Http\Requests\BaseRequest\BaseRequest;

class LessonsStoreRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'chapter_id' => 'required|exists:chapters,id|display_field:name',
            'title' => 'required|string|max:255',
            'video_path' => 'required|',
            'is_free' => 'required|integer',
            'info' => 'nullable|string',
            'order' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'chapter_id.required' => 'The chapter id field is required.',
            'chapter_id.exists' => 'The selected chapter id is invalid.',
            'title.required' => 'The title field is required.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'video_path.required' => 'The video path field is required.',
            'video_path.max' => 'The video path may not be greater than 255 characters.',
            'is_free.required' => 'The is free field is required.',
            'order.required' => 'The order field is required.',
        ];
    }
}
