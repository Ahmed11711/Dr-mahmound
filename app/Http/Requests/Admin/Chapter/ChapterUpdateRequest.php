<?php

namespace App\Http\Requests\Admin\Chapter;

use App\Http\Requests\BaseRequest\BaseRequest;

class ChapterUpdateRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'course_id' => 'sometimes|required|exists:courses,id|display_field:title',
            'name' => 'sometimes|required|string|max:255',
            'order' => 'sometimes|required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'course_id.required' => 'The course id field is required.',
            'course_id.exists' => 'The selected course id is invalid.',
            'name.required' => 'The name field is required.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'order.required' => 'The order field is required.',
        ];
    }
}
