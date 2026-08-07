<?php

namespace App\Http\Controllers\Admin\Lessons;

use App\Repositories\Lessons\LessonsRepositoryInterface;
use App\Http\Controllers\BaseController\BaseController;
use App\Http\Requests\Admin\Lessons\LessonsStoreRequest;
use App\Http\Requests\Admin\Lessons\LessonsUpdateRequest;
use App\Http\Resources\Admin\Lessons\LessonsResource;

class LessonsController extends BaseController
{
    public function __construct(LessonsRepositoryInterface $repository)
    {
        parent::__construct();

        $this->initService(
            repository: $repository,
            collectionName: 'Lessons',
            fileFields: ['video_path']


        );

        $this->storeRequestClass = LessonsStoreRequest::class;
        $this->updateRequestClass = LessonsUpdateRequest::class;
        $this->resourceClass = LessonsResource::class;
    }
}
