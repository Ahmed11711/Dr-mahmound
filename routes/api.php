<?php

use App\Http\Controllers\Admin\UserDeposite\UserDepositeController;
use App\Http\Controllers\Admin\UserOrder\UserOrderController;
use App\Http\Controllers\Admin\UserSubscribe\UserSubscribeController;
use App\Http\Controllers\Api\Courses\CorusesController;
use App\Http\Controllers\Api\Station\StationController;
use App\Http\Controllers\Auth\CreateAcountController;
use App\Http\Controllers\Auth\LoginAccountController;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Middleware\CheckJwtToken;
use Illuminate\Support\Facades\Route;



























Route::group(['prefix' => 'v1/app/auth'], function () {

    // Public Routes
    Route::post('register', [CreateAcountController::class, 'register']);
    Route::post('login', [LoginAccountController::class, 'login']);
    Route::post('social-login', [LoginAccountController::class, 'socialLogin']);

    Route::group(['middleware' => CheckJwtToken::class], function () {
        Route::get('me', [ProfileController::class, 'me']);
        Route::post('refresh', [LoginAccountController::class, 'refresh']);
        Route::post('logout', [ProfileController::class, 'logout']);
    });
    Route::post('send-otp', [OtpController::class, 'send'])
        ->defaults('context', 'register');

    Route::post('verify-otp', [OtpController::class, 'verify'])
        ->defaults('context', 'register');

    // Password Reset Flow
    Route::post('/forget-password/send-otp', [OtpController::class, 'send'])
        ->defaults('context', 'forget_password');

    Route::post('/forget-password/verify-otp', [OtpController::class, 'verify'])
        ->defaults('context', 'forget_password');
});


Route::get('courses', [CorusesController::class, 'index']);
Route::get('courses/{id}', [CorusesController::class, 'show']);
Route::group(['middleware' => CheckJwtToken::class], function () {
    Route::apiResource('user_subscribes', UserSubscribeController::class)->names('user_subscribe');
    Route::get('/user/my-courses', [UserSubscribeController::class, 'myCourses']);
});

require __DIR__ . '/admin.php';
