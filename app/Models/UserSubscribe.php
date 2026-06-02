<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSubscribe extends Model
{

    public array $searchable = ['admin_note'];
    public array $filterable = ['user_id', 'course_id', 'status'];
    public array $allowedFields = ['id', 'user_id', 'course_id', 'payment_method', 'receipt_image', 'status', 'admin_note', 'created_at', 'updated_at'];

    //

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
