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

        // 2) تحقق إن الطلب جاي من موقعك بس
        $referer = $request->headers->get('referer') ?? $request->headers->get('origin');
        $allowedHost = 'dr.echomaster.shop';
        if (!$referer || !str_contains($referer, $allowedHost)) {
            abort(403, 'الرابط غير متاح خارج الموقع');
        }

        // 3) هات الدرس مع الشابتر والكورس في استعلام واحد (أسرع)
        $lesson = Lessons::with('chapter.course')->find($id);
        if (!$lesson) {
            abort(404);
        }

        // 4) uid جاي من داخل اللينك الموقّع نفسه (موثوق لأنه لو اتغير هيكسر التوقيع)
        $uid = (int) $request->query('uid', 0);

        $course = $lesson->chapter?->course;

        // نفس شرط الاشتراك اللي في CoursesResource بالظبط: pending أو approved
        // approved بس هو اللي المفروض يفتح الفيديو فعلياً
        $subscription = $course
            ? $course->userSubscribes()
            ->where('user_id', $uid)
            ->where('status', 'approved')
            ->exists()
            : false;

        // الدرس المجاني يفتح لأي حد، والدرس المدفوع يفتح بس للمشترك approved
        if (!$lesson->is_free && !$subscription) {
            abort(403, 'محتاج تكون مشترك في الدورة عشان تشاهد الدرس ده');
        }

        // 5) هات الفيديو
        if (!$lesson->video_path || !Storage::disk('private')->exists($lesson->video_path)) {
            abort(404);
        }

        return Storage::disk('private')->response($lesson->video_path);
    }
}
