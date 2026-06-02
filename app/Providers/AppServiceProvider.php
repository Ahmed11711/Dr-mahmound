<?php

namespace App\Providers;

use App\Repositories\UserSubscribe\UserSubscribeRepositoryInterface;
use App\Repositories\UserSubscribe\UserSubscribeRepository;

use App\Repositories\Lessons\LessonsRepositoryInterface;
use App\Repositories\Lessons\LessonsRepository;

use App\Repositories\Chapter\ChapterRepositoryInterface;
use App\Repositories\Chapter\ChapterRepository;

use App\Repositories\Courses\CoursesRepositoryInterface;
use App\Repositories\Courses\CoursesRepository;

use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\User\UserRepository;

use App\Repositories\UserOrder\UserOrderRepositoryInterface;
use App\Repositories\UserOrder\UserOrderRepository;

use App\Repositories\UserDeposite\UserDepositeRepositoryInterface;
use App\Repositories\UserDeposite\UserDepositeRepository;


use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\Order\OrderRepository;

use App\Repositories\Station\StationRepositoryInterface;
use App\Repositories\Station\StationRepository;

use App\Repositories\Governorate\GovernorateRepositoryInterface;
use App\Repositories\Governorate\GovernorateRepository;















use App\Repositories\verification\verificationRepositoryInterface;
use App\Repositories\verification\verificationRepository;

































use App\Repositories\blog\blogRepositoryInterface;
use App\Repositories\blog\blogRepository;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {
//
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        $this->app->bind(verificationRepositoryInterface::class, verificationRepository::class);
        
        
        
        
        
        
        
        
        $this->app->bind(GovernorateRepositoryInterface::class, GovernorateRepository::class);
        $this->app->bind(StationRepositoryInterface::class, StationRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(UserDepositeRepositoryInterface::class, UserDepositeRepository::class);
        $this->app->bind(UserOrderRepositoryInterface::class, UserOrderRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CoursesRepositoryInterface::class, CoursesRepository::class);
        $this->app->bind(ChapterRepositoryInterface::class, ChapterRepository::class);
        $this->app->bind(LessonsRepositoryInterface::class, LessonsRepository::class);
        $this->app->bind(UserSubscribeRepositoryInterface::class, UserSubscribeRepository::class);
}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        Validator::extend('display_field', function ($attribute, $value, $parameters, $validator) {
            return true;
        });
    }
}
