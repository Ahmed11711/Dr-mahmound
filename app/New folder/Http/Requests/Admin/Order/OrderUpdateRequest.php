<?php

namespace App\Http\Requests\Admin\Order;

use App\Http\Requests\BaseRequest\BaseRequest;

class OrderUpdateRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'sometimes|required|exists:users,id|display_field:name',
            'driver_id' => 'sometimes|nullable|',
            'station_id' => 'sometimes|nullable|exists:stations,id|display_field:title',
            'destination'    => 'sometimes|nullable|string',

            'departure_time' => 'sometimes|nullable|',
            'total_seats' => 'sometimes|required|integer',
            'available_seats' => 'sometimes|required|integer',
            'seat_price' => 'sometimes|nullable|numeric',
            'status' => 'sometimes|required|in:pending,accepted,in_progress,completed,cancelled',
            'type'          => 'required|in:microbus,car,bus,minibus',
            'day'            => 'sometimes|required|in:saturday,sunday,monday,tuesday,wednesday,thursday,friday',

            'notes' => 'sometimes|nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'The user id field is required.',
            'user_id.exists' => 'The selected user id is invalid.',
            'station_id.exists' => 'The selected station id is invalid.',
            'total_seats.required' => 'The total seats field is required.',
            'available_seats.required' => 'The available seats field is required.',
            'status.required' => 'The status field is required.',
        ];
    }
}
