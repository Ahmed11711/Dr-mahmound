<?php

namespace App\Http\Requests\Admin\UserSubscribe;

use App\Http\Requests\BaseRequest\BaseRequest;

class UserSubscribeStoreRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'course_id' => 'required|exists:courses,id|display_field:title',
            'payment_method' => 'required|string|max:255',
            'receipt_image' => 'required|file|image',
            'admin_note' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'The user id field is required.',
            'user_id.exists' => 'The selected user id is invalid.',
            'course_id.required' => 'The course id field is required.',
            'course_id.exists' => 'The selected course id is invalid.',
            'payment_method.required' => 'The payment method field is required.',
            'payment_method.max' => 'The payment method may not be greater than 255 characters.',
            'receipt_image.image' => 'The receipt image must be a valid image file.',
            'receipt_image.max' => 'The receipt image may not be greater than 2048 KB.',
            'status.required' => 'The status field is required.',
        ];
    }
}
