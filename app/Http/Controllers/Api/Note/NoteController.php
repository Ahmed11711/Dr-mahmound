<?php

namespace App\Http\Controllers\Api\Note;

use App\Http\Controllers\Controller;
use App\Models\Lessons;
use App\Models\Note;
use Illuminate\Http\Request;

// app/Http/Controllers/NoteController.php
class NoteController extends Controller
{
    // GET /api/lessons/{lesson}/notes
    public function index(Request $request, Lessons $lesson)
    {
        return $lesson->notes()
            ->where('user_id', $request->user()->id)
            ->latest()
            ->get();
    }

    // POST /api/lessons/{lesson}/notes
    public function store(Request $request, Lessons $lesson)
    {
        $validated = $request->validate([
            'body' => 'required|string|min:1|max:5000',
        ]);

        $note = $lesson->notes()->create([
            'user_id' => $request->user()->id,
            'body' => $validated['body'],
        ]);

        return response()->json($note, 201);
    }

    // PUT /api/notes/{note}
    public function update(Request $request, Note $note)
    {
        if ($note->user_id !== $request->user()->id) {
            abort(403);
        }
        $validated = $request->validate(['body' => 'required|string|min:1|max:5000']);
        $note->update($validated);
        return response()->json($note);
    }

    // DELETE /api/notes/{note}
    public function destroy(Request $request, Note $note)
    {
        if ($note->user_id !== $request->user()->id) {
            abort(403);
        }
        $note->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
