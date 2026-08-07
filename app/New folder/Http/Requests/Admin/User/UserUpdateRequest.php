<?php

namespace App\Http\Requests\Admin\User;

use App\Http\Requests\BaseRequest\BaseRequest;

class UserUpdateRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|nullable|string|max:255|unique:users,email,'.$this->route('user').',id',
            'password' => 'sometimes|nullable|string|max:255',
            'phone' => 'sometimes|nullable|string|max:255',
            'image' => 'sometimes|nullable|file|image|max:2048',
            'whtsapp' => 'sometimes|nullable|string|max:255',
            'is_active' => 'sometimes|required|integer',
            'email_verified_at' => 'sometimes|nullable|date',
            'remember_token' => 'sometimes|nullable|string',
            'role' => 'sometimes|nullable|in:admin,user,driver,super_admin',
            'social_type' => 'sometimes|nullable|in:google,apple,facebook',
            'social_id' => 'sometimes|nullable|',
            'parent_id' => 'sometimes|nullable|',
            'last_login_at' => 'sometimes|nullable|date',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'email.max' => 'The email may not be greater than 255 characters.',
            'email.unique' => 'This email has already been taken.',
            'password.max' => 'The password may not be greater than 255 characters.',
            'phone.max' => 'The phone may not be greater than 255 characters.',
            'image.image' => 'The image must be a valid image file.',
            'image.max' => 'The image may not be greater than 2048 KB.',
            'whtsapp.max' => 'The whtsapp may not be greater than 255 characters.',
            'is_active.required' => 'The is active field is required.',
            'email_verified_at.date' => 'The email verified at is not a valid date.',
            'last_login_at.date' => 'The last login at is not a valid date.',
        ];
    }
}
