<?php

namespace App\Models;

use \App\Models\UserSubscribe;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{

    public array $searchable = ['description', 'info', 'title'];
    public array $filterable = ['title'];
    public array $allowedFields = ['id', 'title', 'description', 'image', 'duration_hours', 'price', 'discount_price', 'discount_start', 'discount_end', 'info', 'file_path', 'rating', 'created_at', 'updated_at'];

    public function chapter()
    {
        return $this->hasMany(Chapter::class, 'course_id'); // explicitly set the FK
    }

    public function userSubscribes()
    {
        return $this->hasMany(UserSubscribe::class, 'course_id');
    }
    // في app/Models/Courses.php
    public function comments()
    {
        return $this->hasMany(Comment::class, 'course_id');
    }
}
