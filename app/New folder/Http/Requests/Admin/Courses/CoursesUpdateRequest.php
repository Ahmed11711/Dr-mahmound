<?php

namespace App\Http\Requests\Admin\Courses;

use App\Http\Requests\BaseRequest\BaseRequest;

class CoursesUpdateRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'image' => 'sometimes|nullable|file|image|max:2048',
            'duration_hours' => 'sometimes|required|integer',
            'price' => 'sometimes|required|numeric',
            'discount_price' => 'sometimes|nullable|numeric',
            'discount_start' => 'sometimes|nullable|date',
            'discount_end' => 'sometimes|nullable|date',
            'info' => 'sometimes|nullable|string',
            'file_path' => 'sometimes|nullable|file|image|max:2048',
            'rating' => 'sometimes|required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'description.required' => 'The description field is required.',
            'image.image' => 'The image must be a valid image file.',
            'image.max' => 'The image may not be greater than 2048 KB.',
            'duration_hours.required' => 'The duration hours field is required.',
            'price.required' => 'The price field is required.',
            'discount_start.date' => 'The discount start is not a valid date.',
            'discount_end.date' => 'The discount end is not a valid date.',
            'file_path.image' => 'The file path must be a valid image file.',
            'file_path.max' => 'The file path may not be greater than 2048 KB.',
            'rating.required' => 'The rating field is required.',
        ];
    }
}
