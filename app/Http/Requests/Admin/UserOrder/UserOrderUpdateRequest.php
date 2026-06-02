<?php

namespace App\Http\Requests\Admin\UserOrder;

use App\Http\Requests\BaseRequest\BaseRequest;

class UserOrderUpdateRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'sometimes|required|exists:users,id|display_field:name',
            'order_id' => 'sometimes|required|exists:orders,id|display_field:name',
            'seats_count' => 'sometimes|required|integer',
            'price' => 'sometimes|required|numeric',
            'payment_status' => 'sometimes|required|in:pending,paid,failed,refunded',
            'payment_method' => 'sometimes|nullable|string|max:255',
            'transaction_id' => 'sometimes|nullable|',
            'status' => 'sometimes|required|in:pending,confirmed,completed,cancelled',
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'The user id field is required.',
            'user_id.exists' => 'The selected user id is invalid.',
            'order_id.required' => 'The order id field is required.',
            'order_id.exists' => 'The selected order id is invalid.',
            'seats_count.required' => 'The seats count field is required.',
            'price.required' => 'The price field is required.',
            'payment_status.required' => 'The payment status field is required.',
            'payment_method.max' => 'The payment method may not be greater than 255 characters.',
            'status.required' => 'The status field is required.',
        ];
    }
}
