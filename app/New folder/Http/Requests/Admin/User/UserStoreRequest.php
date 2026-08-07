<?php

namespace App\Http\Requests\Admin\User;

use App\Http\Requests\BaseRequest\BaseRequest;

class UserStoreRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|max:255|unique:users,email',
            'password' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'image' => 'nullable|file|image|max:2048',
            'whtsapp' => 'nullable|string|max:255',
            'is_active' => 'required|integer',
            'email_verified_at' => 'nullable|date',
            'remember_token' => 'nullable|string',
            'role' => 'nullable|in:admin,user,driver,super_admin',
            'social_type' => 'nullable|in:google,apple,facebook',
            'social_id' => 'nullable|',
            'parent_id' => 'nullable|',
            'last_login_at' => 'nullable|date',
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
