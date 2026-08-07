<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Note.php
class Note extends Model
{
    protected $fillable = ['user_id', 'lesson_id', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lessons::class);
    }
}
