<?php

namespace App\Http\Requests\Admin\UserDeposite;

use App\Http\Requests\BaseRequest\BaseRequest;

class UserDepositeStoreRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'amount' => 'required|numeric',
            'user_phone' => 'nullable|string|max:255',
            'company_phone' => 'nullable|string|max:255',
            'image' => 'nullable|file|image|max:2048',
            'type' => 'nullable|in:vodafone_cash,insta_pay',
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'The user id field is required.',
            'user_id.exists' => 'The selected user id is invalid.',
            'amount.required' => 'The amount field is required.',
            'user_phone.max' => 'The user phone may not be greater than 255 characters.',
            'company_phone.max' => 'The company phone may not be greater than 255 characters.',
            'image.image' => 'The image must be a valid image file.',
            'image.max' => 'The image may not be greater than 2048 KB.',
            'status.required' => 'The status field is required.',
        ];
    }
}
