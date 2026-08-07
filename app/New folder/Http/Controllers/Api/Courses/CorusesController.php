<?php

namespace App\Http\Controllers\Api\Courses;

use App\Http\Controllers\BaseController\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Courses\CoursesStoreRequest;
use App\Http\Requests\Admin\Courses\CoursesUpdateRequest;
use App\Http\Resources\Admin\Courses\CoursesResource;
use App\Repositories\Courses\CoursesRepositoryInterface;
use Illuminate\Http\Request;

class CorusesController extends BaseController
{

    public function __construct(CoursesRepositoryInterface $repository)
    {
        parent::__construct();

        $this->initService(
            repository: $repository,
            collectionName: 'Courses',
            fileFields: ['image', 'file_path']
        );

        $this->storeRequestClass = CoursesStoreRequest::class;
        $this->updateRequestClass = CoursesUpdateRequest::class;
        $this->resourceClass = CoursesResource::class;
    }
    protected function getShowRelationships(): array
    {
        return [
            'chapter.lesone',
            'chapter.course.userSubscribes',
            'userSubscribes',
        ];
    }
}
