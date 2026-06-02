<?php

namespace App\Http\Requests\Admin\Station;

use App\Http\Requests\BaseRequest\BaseRequest;

class StationUpdateRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'sometimes|required|exists:users,id|display_field:name',
            'governorate_id' => 'sometimes|exists:governorates,id',

            'title' => 'sometimes|required|string|max:255',
            'rating' => 'sometimes|nullable|string|max:255',
            'image' => 'sometimes|required|file|image|max:2048',
            'address' => 'sometimes|nullable|string',
            'is_active' => 'sometimes|required|integer',

        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'The user id field is required.',
            'user_id.exists' => 'The selected user id is invalid.',
            'title.required' => 'The title field is required.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'rating.max' => 'The rating may not be greater than 255 characters.',
            'image.required' => 'The image field is required.',
            'image.image' => 'The image must be a valid image file.',
            'image.max' => 'The image may not be greater than 2048 KB.',
            'is_active.required' => 'The is active field is required.',
        ];
    }
}
