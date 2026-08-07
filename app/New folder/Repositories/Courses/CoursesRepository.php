<?php

namespace App\Repositories\Courses;

use App\Repositories\Courses\CoursesRepositoryInterface;
use App\Repositories\BaseRepository\BaseRepository;
use App\Models\Courses;

/**
 * Class CoursesRepository
 * @package App\Repositories\Courses
 */
class CoursesRepository extends BaseRepository implements CoursesRepositoryInterface
{
    /**
     * CoursesRepository constructor.
     *
     * @param Courses $model
     */
    public function __construct(Courses $model)
    {
        parent::__construct($model);
    }
}