<?php

namespace App\Repositories\Station;

use App\Repositories\Station\StationRepositoryInterface;
use App\Repositories\BaseRepository\BaseRepository;
use App\Models\Station;

/**
 * Class StationRepository
 * @package App\Repositories\Station
 */
class StationRepository extends BaseRepository implements StationRepositoryInterface
{
    /**
     * StationRepository constructor.
     *
     * @param Station $model
     */
    public function __construct(Station $model)
    {
        parent::__construct($model);
    }
}