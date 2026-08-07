<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{

    public array $searchable = ['info'];
    public array $filterable = ['chapter_id', 'is_free'];
    public array $allowedFields = ['id', 'chapter_id', 'title', 'video_path', 'is_free', 'info', 'order', 'created_at', 'updated_at'];

    //

    public function chapter()
    {
        return $this->belongsTo(Chapter::class, 'chapter_id');
    }

}