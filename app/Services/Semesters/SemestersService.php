<?php

namespace App\Services\Semesters;

use App\Models\Semester;
use App\Services\Semesters\Repositories\SemesterRepositoryInterface;
use Illuminate\Http\Request;

class SemestersService
{

    private SemesterRepositoryInterface $repository;

    public function __construct(SemesterRepositoryInterface $repository)
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

    public function update(Semester $model, array $data)
    {
        return $this->repository->updateFromArray($model, $data);
    }

    public function delete(Semester $model)
    {
        return $this->repository->delete($model);
    }

}
