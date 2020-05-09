<?php

namespace App\Services\Students\Repositories;

use App\Models\Student;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class EloquentStudentRepository implements StudentRepositoryInterface
{
    public function find(int $id): ?Student
    {
        return Student::find($id);
    }

    public function search(array $filters): LengthAwarePaginator
    {
        $student = $this->searchWhere($filters);
        return $student->paginate(15);
    }

    public function searchAll(array $filters): Collection
    {
        $student = $this->searchWhere($filters);
        return $student->get();
    }

    private function searchWhere(array $filters)
    {
        $student = (new Student)->newQuery();
        if (isset($filters['group_id']) && is_numeric($filters['group_id'])) {
            $student->whereGroupId($filters['group_id']);
        } else {
            $student->orderBy('group_id', 'desc');
        }
        if (isset($filters['subgroup']) && is_numeric($filters['subgroup'])) {
            $student->whereSubgroup($filters['subgroup']);
        }
        return $student->orderBy('name', 'asc');
    }

    public function createFromArray(array $data): Student
    {
        return Student::create($data);
    }

    public function updateFromArray(Student $model, array $data): Student
    {
        $model->update($data);
        return $model;
    }

    public function delete(Student $model)
    {
        $model->delete();
    }


}
