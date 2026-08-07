<?php

namespace App\Repositories\Chapter;

use App\Repositories\Chapter\ChapterRepositoryInterface;
use App\Repositories\BaseRepository\BaseRepository;
use App\Models\Chapter;

/**
 * Class ChapterRepository
 * @package App\Repositories\Chapter
 */
class ChapterRepository extends BaseRepository implements ChapterRepositoryInterface
{
    /**
     * ChapterRepository constructor.
     *
     * @param Chapter $model
     */
    public function __construct(Chapter $model)
    {
        parent::__construct($model);
    }
}