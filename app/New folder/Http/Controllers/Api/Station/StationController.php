<?php

namespace App\Http\Controllers\Api\Station;

use App\Http\Controllers\BaseController\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Station\StationStoreRequest;
use App\Http\Requests\Admin\Station\StationUpdateRequest;
use App\Http\Resources\Api\Station\StationResource;
use App\Repositories\Station\StationRepositoryInterface;
use Illuminate\Http\Request;

class StationController extends BaseController
{
    public function __construct(StationRepositoryInterface $repository)
    {
        parent::__construct();

        $this->initService(
            repository: $repository,
            collectionName: 'Station',
            fileFields: ['image']
        );

        $this->withRelationships = ['governorate'];
        $this->storeRequestClass = StationStoreRequest::class;
        $this->updateRequestClass = StationUpdateRequest::class;
        $this->resourceClass = StationResource::class;
    }

    protected function getShowRelationships(): array
    {
        return [
            'governorate',
            'orders.driver',
        ];
    }
}
