<?php

namespace App\Repositories\UserDeposite;

use App\Repositories\UserDeposite\UserDepositeRepositoryInterface;
use App\Repositories\BaseRepository\BaseRepository;
use App\Models\UserDeposite;

/**
 * Class UserDepositeRepository
 * @package App\Repositories\UserDeposite
 */
class UserDepositeRepository extends BaseRepository implements UserDepositeRepositoryInterface
{
    /**
     * UserDepositeRepository constructor.
     *
     * @param UserDeposite $model
     */
    public function __construct(UserDeposite $model)
    {
        parent::__construct($model);
    }
}