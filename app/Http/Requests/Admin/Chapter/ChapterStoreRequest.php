<?php

namespace App\Http\Requests\Admin\Chapter;

use App\Http\Requests\BaseRequest\BaseRequest;

class ChapterStoreRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'course_id' => 'required|exists:courses,id|display_field:title',
            'name' => 'required|string|max:255',
            'order' => 'required|integer',
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
