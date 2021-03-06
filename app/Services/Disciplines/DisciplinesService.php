<?php

namespace App\Services\Disciplines;

use App\Models\Discipline;
use App\Services\Disciplines\Repositories\DisciplineRepositoryInterface;

class DisciplinesService
{

    private DisciplineRepositoryInterface $repository;

    public function __construct(DisciplineRepositoryInterface $repository)
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

    public function create(array $data)
    {
        return $this->repository->createFromArray($data);
    }

    public function update(Discipline $model, array $data)
    {
        return $this->repository->updateFromArray($model, $data);
    }

    public function delete(Discipline $model)
    {
        return $this->repository->delete($model);
    }

}
