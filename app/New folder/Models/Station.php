<?php

namespace App\Models;

use App\Models\Governorate;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{

    public array $searchable = ['address', 'title'];
    public array $filterable = ['user_id', 'is_active'];
    public array $allowedFields = ['id', 'user_id', 'title', 'rating', 'image', 'address', 'is_active', 'created_at', 'updated_at'];

    //

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governorate_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
