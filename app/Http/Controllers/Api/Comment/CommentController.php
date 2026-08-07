<?php

namespace App\Http\Controllers\Api\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Courses;
use Illuminate\Http\Request;

// app/Http/Controllers/CommentController.php
class CommentController extends Controller
{
    // GET /api/courses/{course}/comments?lesson_id=optional
    public function index(Request $request, Courses $course)
    {
        $query = $course->comments()->approved()->with('user:id,name')->latest();

        if ($request->has('lesson_id')) {
            $query->where('lesson_id', $request->lesson_id);
        } else {
            $query->whereNull('lesson_id'); // تعليقات الكورس العامة بس
        }

        return $query->paginate(20);
    }

    // POST /api/courses/{course}/comments
    public function store(Request $request, Courses $course)
    {
        $validated = $request->validate([
            'body' => 'required|string|min:2|max:2000',
            'lesson_id' => 'nullable|exists:lessons,id',
        ]);

        $comment = $course->comments()->create([
            'user_id' => $request->user()->id,
            'lesson_id' => $validated['lesson_id'] ?? null,
            'body' => $validated['body'],
            'status' => 'pending',
        ]);

        return response()->json([
            'message' => 'تم إرسال تعليقك وهو الآن قيد المراجعة',
            'comment' => $comment,
        ], 201);
    }

    // DELETE /api/comments/{comment}
    public function destroy(Request $request, Comment $comment)
    {
        if ($comment->user_id !== $request->user()->id) {
            abort(403);
        }
        $comment->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
