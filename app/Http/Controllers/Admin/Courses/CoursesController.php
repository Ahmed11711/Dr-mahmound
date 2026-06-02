<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Repositories\Courses\CoursesRepositoryInterface;
use App\Http\Controllers\BaseController\BaseController;
use App\Http\Requests\Admin\Courses\CoursesStoreRequest;
use App\Http\Requests\Admin\Courses\CoursesUpdateRequest;
use App\Http\Resources\Admin\Courses\CoursesResource;

class CoursesController extends BaseController
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
}
