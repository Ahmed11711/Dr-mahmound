<?php

namespace App\Repositories\UserSubscribe;

use App\Repositories\UserSubscribe\UserSubscribeRepositoryInterface;
use App\Repositories\BaseRepository\BaseRepository;
use App\Models\UserSubscribe;

/**
 * Class UserSubscribeRepository
 * @package App\Repositories\UserSubscribe
 */
class UserSubscribeRepository extends BaseRepository implements UserSubscribeRepositoryInterface
{
    /**
     * UserSubscribeRepository constructor.
     *
     * @param UserSubscribe $model
     */
    public function __construct(UserSubscribe $model)
    {
        parent::__construct($model);
    }
}