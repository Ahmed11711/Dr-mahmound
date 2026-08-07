<?php

namespace App\Repositories\Lessons;

use App\Repositories\Lessons\LessonsRepositoryInterface;
use App\Repositories\BaseRepository\BaseRepository;
use App\Models\Lessons;

/**
 * Class LessonsRepository
 * @package App\Repositories\Lessons
 */
class LessonsRepository extends BaseRepository implements LessonsRepositoryInterface
{
    /**
     * LessonsRepository constructor.
     *
     * @param Lessons $model
     */
    public function __construct(Lessons $model)
    {
        parent::__construct($model);
    }
}