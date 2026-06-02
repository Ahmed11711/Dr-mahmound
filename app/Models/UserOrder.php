<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{

    public array $searchable = [''];
    public array $filterable = ['user_id', 'order_id', 'payment_status', 'transaction_id', 'status'];
    public array $allowedFields = ['id', 'user_id', 'order_id', 'seats_count', 'price', 'payment_status', 'payment_method', 'transaction_id', 'status', 'created_at', 'updated_at'];

    //

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }


    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

}