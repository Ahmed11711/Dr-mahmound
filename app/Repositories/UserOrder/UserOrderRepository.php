<?php

namespace App\Repositories\UserOrder;

use App\Repositories\UserOrder\UserOrderRepositoryInterface;
use App\Repositories\BaseRepository\BaseRepository;
use App\Models\UserOrder;

/**
 * Class UserOrderRepository
 * @package App\Repositories\UserOrder
 */
class UserOrderRepository extends BaseRepository implements UserOrderRepositoryInterface
{
    /**
     * UserOrderRepository constructor.
     *
     * @param UserOrder $model
     */
    public function __construct(UserOrder $model)
    {
        parent::__construct($model);
    }
}