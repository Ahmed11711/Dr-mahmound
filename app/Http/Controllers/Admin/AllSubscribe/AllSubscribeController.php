<?php

namespace App\Http\Controllers\Admin\AllSubscribe;

use App\Http\Controllers\BaseController\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserSubscribe\UserSubscribeStoreRequest;
use App\Http\Requests\Admin\UserSubscribe\UserSubscribeUpdateRequest;
use App\Http\Resources\Admin\UserSubscribe\UserSubscribeResource;
use App\Repositories\UserSubscribe\UserSubscribeRepositoryInterface;
use Illuminate\Http\Request;

class AllSubscribeController extends BaseController
{
    public function __construct(UserSubscribeRepositoryInterface $repository)
    {
        parent::__construct();

        $this->initService(
            repository: $repository,
            collectionName: 'UserSubscribe',
            fileFields: ['receipt_image']
        );
        $this->withRelationships = ['user:id,name,email'];
        $this->storeRequestClass  = UserSubscribeStoreRequest::class;
        $this->updateRequestClass = UserSubscribeUpdateRequest::class;
        $this->resourceClass      = UserSubscribeResource::class;
    }
}
