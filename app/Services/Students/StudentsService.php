<?php

namespace App\Services\Students;

use App\Models\Student;
use App\Services\Students\Repositories\StudentRepositoryInterface;

class StudentsService
{

    private StudentRepositoryInterface $repository;

    public function __construct(StudentRepositoryInterface $repository)
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

    public function searchAll(array $filters)
    {
        return $this->repository->searchAll($filters);
    }

    public function create(array $data)
    {
        return $this->repository->createFromArray($data);
    }

    public function update(Student $model, array $data)
    {
        return $this->repository->updateFromArray($model, $data);
    }

    public function delete(Student $model)
    {
        return $this->repository->delete($model);
    }

}
