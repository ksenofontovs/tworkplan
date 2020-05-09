<?php

namespace App\Services\Semesters\Repositories;

use App\Models\Semester;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class EloquentSemesterRepository implements SemesterRepositoryInterface
{
    public function find(int $id): ?Semester
    {
        return Semester::find($id);
    }

    public function search(array $filters): LengthAwarePaginator
    {
        return Semester::orderBy('id', 'desc')->paginate(15);
    }

    public function createFromArray(array $data): Semester
    {
        return Semester::create($data);
    }

    public function updateFromArray(Semester $model, array $data): Semester
    {
        $model->update($data);
        return $model;
    }

    public function delete(Semester $model)
    {
        $model->delete();
    }


}
