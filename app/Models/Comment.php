<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Comment.php
class Comment extends Model
{
    protected $fillable = ['user_id', 'course_id', 'lesson_id', 'body', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lessons::class);
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }
}
