<?php



use App\Http\Controllers\Admin\AllSubscribe\AllSubscribeController;
use App\Http\Controllers\Admin\Chapter\ChapterController;
use App\Http\Controllers\Admin\Courses\CoursesController;
use App\Http\Controllers\Admin\Lessons\LessonsController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\UserSubscribe\UserSubscribeController;
use App\Http\Controllers\Auth\LoginAccountController;
use App\Http\Middleware\CheckJwtToken;
use Illuminate\Support\Facades\Route;








Route::prefix('admin/v1')->group(function () {
    Route::post('login', [LoginAccountController::class, 'login']);
    Route::apiResource('users', UserController::class)->names('user');
    Route::apiResource('Courses', CoursesController::class)->names('courses');
    Route::apiResource('chapters', ChapterController::class)->names('chapter');
    Route::apiResource('lessons', LessonsController::class)->names('lessons');
    Route::apiResource('all-subscribe', AllSubscribeController::class)->names('all-subscribe');
});

Route::prefix('v1')->group(function () {});
