<?php

namespace App\Http\Controllers\Admin\UserSubscribe;

use App\Http\Controllers\BaseController\BaseController;
use App\Http\Requests\Admin\UserSubscribe\UserSubscribeStoreRequest;
use App\Http\Requests\Admin\UserSubscribe\UserSubscribeUpdateRequest;
use App\Http\Resources\Admin\Course\CourseResource;
use App\Http\Resources\Admin\Courses\CoursesResource;
use App\Http\Resources\Admin\UserSubscribe\UserSubscribeResource;
use App\Models\Courses;
use App\Repositories\UserSubscribe\UserSubscribeRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Override;

class UserSubscribeController extends BaseController
{
    public function __construct(UserSubscribeRepositoryInterface $repository)
    {
        parent::__construct();

        $this->initService(
            repository: $repository,
            collectionName: 'UserSubscribe',
            fileFields: ['receipt_image']
        );

        $this->storeRequestClass  = UserSubscribeStoreRequest::class;
        $this->updateRequestClass = UserSubscribeUpdateRequest::class;
        $this->resourceClass      = UserSubscribeResource::class;
    }

    /**
     * تقييد الـ query على سجلات اليوزر الحالي فقط
     */
    #[Override]
    public function applyScoping($query)
    {
        return $query->where('user_id', auth('api')->id());
    }

    /**
     * إضافة user_id و status تلقائياً عند الاشتراك
     */
    #[Override]
    public function beforeStore(array $data, Request $request): array
    {
        $data['user_id']        = auth('api')->id();
        $data['status']         = 'pending';
        $data['transaction_id'] = (string) \Illuminate\Support\Str::uuid();

        $course = Courses::find($data['course_id']);
        $data['price'] = $course?->price ?? 0;

        return $data;
    }

    /**
     * كورسات اليوزر الحالي مع حالة كل اشتراك
     *
     * GET /api/user/my-courses
     */
    public function myCourses(): JsonResponse
    {
        $subscriptions = $this->repository
            ->query()
            ->with(['course.chapter.lesone'])   // تحميل الكورس مع الفصول والدروس
            ->where('user_id', auth('api')->id())
            ->latest()
            ->get();

        if ($subscriptions->isEmpty()) {
            return $this->successResponse([], 'No courses found');
        }

        $data = $subscriptions->map(function ($subscription) {
            $course = $subscription->course;

            if (!$course) return null;

            return [
                'subscription_id'     => $subscription->id,
                'transaction_id' => $subscription->transaction_id,
                'price'            => $subscription->price,
                'subscription_status' => $subscription->status,
                'is_subscribed'       => true,
                'course'              => new CoursesResource($course),
            ];
        })->filter()->values();

        return $this->successResponse($data, 'Courses retrieved successfully');
    }
}
