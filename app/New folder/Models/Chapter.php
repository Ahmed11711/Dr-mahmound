<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{

    public array $searchable = [''];
    public array $filterable = ['course_id'];
    public array $allowedFields = ['id', 'course_id', 'name', 'order', 'created_at', 'updated_at'];

    //

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }

    public function lesone()
    {
        return $this->hasMany(Lessons::class);
    }
}
