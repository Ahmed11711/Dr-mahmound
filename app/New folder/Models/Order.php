<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public array $searchable = ['notes'];
    public array $filterable = ['user_id', 'driver_id', 'station_id', 'status'];
    public array $allowedFields = ['id', 'user_id', 'driver_id', 'station_id', 'departure_time', 'total_seats', 'available_seats', 'seat_price', 'status', 'notes', 'created_at', 'updated_at'];

    //

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id', 'id');
    }


    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id');
    }
}
