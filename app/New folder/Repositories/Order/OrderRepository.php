<?php

namespace App\Repositories\Order;

use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\BaseRepository\BaseRepository;
use App\Models\Order;

/**
 * Class OrderRepository
 * @package App\Repositories\Order
 */
class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    /**
     * OrderRepository constructor.
     *
     * @param Order $model
     */
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }
}