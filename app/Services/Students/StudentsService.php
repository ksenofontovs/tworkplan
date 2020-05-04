<?php

namespace App\Services\Students;

use App\Models\Student;
use App\Services\Students\Repositories\StudentRepositoryInterface;
use Illuminate\Http\Request;

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

    public function search(Request $request)
    {
        return $this->repository->search($request);
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
