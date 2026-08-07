<?php

namespace App\Http\Controllers\Api\LessonStream;

use App\Http\Controllers\Controller;
use App\Models\Lessons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LessonStreamController extends Controller
{
    public function stream(Request $request, int $id)
    {
        // 1) تحقق من صحة التوقيع والمدة
        if (!$request->hasValidSignature()) {
            abort(403, 'الرابط غير صالح أو منتهي الصلاحية');
        }

        // 2) تحقق إن الطلب جاي من موقعك/تطبيقك بس
        $referer = $request->headers->get('referer') ?? $request->headers->get('origin');
        $allowedHost = 'dr.echomaster.shop';

        if (!$referer || !str_contains($referer, $allowedHost)) {
            abort(403, 'الوصول مرفوض');
        }

        // 3) تحقق إن نفس الجهاز (IP) اللي طلب الرابط هو اللي بيشغله
        $uid = $request->query('uid', 0);
        $cachedIp = cache()->get("lesson_access_{$id}_{$uid}");

        if (!$cachedIp || $cachedIp !== $request->ip()) {
            abort(403, 'الرابط مش صالح من جهاز تاني');
        }

        // 4) هات الدرس والفيديو
        $lesson = Lessons::find($id);
        if (!$lesson) {
            abort(404);
        }

        if (!$lesson->video_path || !Storage::disk('private')->exists($lesson->video_path)) {
            abort(404);
        }

        return Storage::disk('private')->response($lesson->video_path);
    }
}