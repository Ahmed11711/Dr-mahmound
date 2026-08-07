<?php

namespace App\Http\Requests\Admin\UserOrder;

use App\Http\Requests\BaseRequest\BaseRequest;

class UserOrderStoreRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'order_id' => 'required|exists:orders,id|display_field:name',
            'seats_count' => 'required|integer',
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
