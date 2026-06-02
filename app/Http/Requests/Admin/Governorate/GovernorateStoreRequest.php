<?php

namespace App\Http\Requests\Admin\Governorate;

use App\Http\Requests\BaseRequest\BaseRequest;

class GovernorateStoreRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:governorates,code',
            'is_active' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'code.required' => 'The code field is required.',
            'code.max' => 'The code may not be greater than 10 characters.',
            'code.unique' => 'This code has already been taken.',
            'is_active.required' => 'The is active field is required.',
        ];
    }
}
