<?php

namespace App\Services\VisitLogs;

use App\Models\VisitLog;
use App\Services\VisitLogs\Repositories\VisitLogRepositoryInterface;

class VisitLogsService
{

    private VisitLogRepositoryInterface $repository;

    public function __construct(VisitLogRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function search(array $filters)
    {
        return $this->repository->search($filters);
    }

    public function searchOne(array $filters)
    {
        return $this->repository->searchOne($filters);
    }

    public function searchAll(array $filters)
    {
        return $this->repository->searchAll($filters);
    }

    public function create(array $data)
    {
        return $this->repository->createFromArray($data);
    }

    public function update(VisitLog $model, array $data)
    {
        return $this->repository->updateFromArray($model, $data);
    }

    public function delete(VisitLog $model)
    {
        return $this->repository->delete($model);
    }

}
