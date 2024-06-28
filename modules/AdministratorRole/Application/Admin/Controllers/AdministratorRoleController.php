<?php

declare(strict_types=1);

namespace Modules\AdministratorRole\Application\Admin\Controllers;

use App\Http\Controllers\BaseAdministratorController;
use App\Http\Requests\BulkDestroyRequest;
use App\Http\Requests\DestroyRequest;
use App\Http\Requests\ShowRequest;
use Modules\AdministratorRole\Application\Admin\AppServices\AdministratorRoleAppService;
use Modules\AdministratorRole\Application\Admin\Requests\AdministratorRole\IndexRequest;
use Modules\AdministratorRole\Application\Admin\Requests\AdministratorRole\StoreRequest;
use Modules\AdministratorRole\Application\Admin\Requests\AdministratorRole\UpdateRequest;
use Modules\AdministratorRole\Application\Admin\Resources\AdministratorRoleResource;
use Modules\AdministratorRole\Application\Admin\Transformers\AdministratorRole\AdministratorRoleTransformer;

class AdministratorRoleController extends BaseAdministratorController
{
    public function __construct(
        private AdministratorRoleAppService $administratorRoleAppService
    ) {}

    // public function index(IndexRequest $request)
    // {
    //     $result = $this->administratorRoleAppService->getAll($request->validated());

    //     return $this->success($result, AdministratorRoleTransformer::class)->respond();
    // }

    public function store(StoreRequest $request)
    {
        $result = $this->administratorRoleAppService->create($request->validated());

        return $this->success()
            ->message(__('Success! The record has been added.'))
            ->send(201);

        // return $this->success($result)
        //     ->message(__('Success! The record has been added.'))
        //     ->code(200);

        // return new AdministratorRoleResource($result);

        // return $this->success($result, AdministratorRoleTransformer::class)
        //     ->meta(['message' => __('Success! The record has been added.')])
        //     ->respond(201);
    }

    // public function show(ShowRequest $request)
    // {
    //     $result = $this->administratorRoleAppService->show($request->validated());

    //     return $this->success($result, AdministratorRoleTransformer::class)->respond();
    // }

    // public function update(UpdateRequest $request)
    // {
    //     $result = $this->administratorRoleAppService->update($request->validated());

    //     return $this->success($result, AdministratorRoleTransformer::class)
    //         ->meta(['message' => __('Success! The record has been updated.')])
    //         ->respond();
    // }

    // public function destroy(DestroyRequest $request)
    // {
    //     $this->administratorRoleAppService->delete($request->validated());

    //     return $this->success()->meta(['message' => __('Success! The record has been deleted.')])->respond();
    // }

    // public function bulkDestroy(BulkDestroyRequest $request)
    // {
    //     $this->administratorRoleAppService->delete($request->validated());

    //     return $this->success()->meta(['message' => __('Success! The records have been deleted.')])->respond();
    // }
}
