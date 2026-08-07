<?php

namespace App\Http\Requests\Admin\Order;

use App\Http\Requests\BaseRequest\BaseRequest;

class OrderStoreRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id'         => 'required|exists:users,id',
            'driver_id'       => 'nullable|exists:users,id',
            'station_id'      => 'nullable|exists:stations,id',
            'destination'    => 'required|string',
            'departure_time' => 'required|date_format:H:i',
            'total_seats'     => 'required|integer|min:1',
            'available_seats' => 'nullable|integer|min:0',
            'seat_price'      => 'nullable|numeric|min:0',
            'status'          => 'required|in:pending,accepted,in_progress,completed,cancelled',
            'type'          => 'required|in:microbus,car,bus,minibus',
            'notes'           => 'nullable|string|max:1000',
            'day'            => 'required|in:saturday,sunday,monday,tuesday,wednesday,thursday,friday',

        ];
    }

    public function messages(): array
    {
        return [
            'departure_time.date_format' => 'التاريخ لازم يكون بتنسيق: YYYY-MM-DD HH:MM:SS',
            'available_seats.lte'        => 'عدد المقاعد المتاحة لا يمكن أن يكون أكبر من المقاعد الكلية.',
            'user_id.exists'             => 'المستخدم المختار غير موجود.',
            'total_seats.required' => 'The total seats field is required.',
            'available_seats.required' => 'The available seats field is required.',
            'status.required' => 'The status field is required.',
        ];
    }
}
