<?php

namespace App\Repositories\Governorate;

use App\Repositories\Governorate\GovernorateRepositoryInterface;
use App\Repositories\BaseRepository\BaseRepository;
use App\Models\Governorate;

/**
 * Class GovernorateRepository
 * @package App\Repositories\Governorate
 */
class GovernorateRepository extends BaseRepository implements GovernorateRepositoryInterface
{
    /**
     * GovernorateRepository constructor.
     *
     * @param Governorate $model
     */
    public function __construct(Governorate $model)
    {
        parent::__construct($model);
    }
}