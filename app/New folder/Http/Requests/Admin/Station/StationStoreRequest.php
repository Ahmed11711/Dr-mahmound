<?php

namespace App\Http\Requests\Admin\Station;

use App\Http\Requests\BaseRequest\BaseRequest;

class StationStoreRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'governorate_id' => 'required|exists:governorates,id',
            'title' => 'required|string|max:255',
            'rating' => 'nullable|string|max:255',
            'image' => 'required|file|image|max:2048',
            'address' => 'nullable|string',
            'is_active' => 'required|integer',
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
