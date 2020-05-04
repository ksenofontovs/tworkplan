<?php

namespace App\Services\Students\Repositories;

use App\Models\Student;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class EloquentStudentRepository implements StudentRepositoryInterface
{
    public function find(int $id): ?Student
    {
        return Student::find($id);
    }

    public function search(Request $request): LengthAwarePaginator
    {
        $student = (new Student)->newQuery();
        if ($request->has('group_id')) {
            $student->whereGroupId($request->input('group_id'));
        }
        return $student->orderBy('group_id', 'desc')->paginate(15);
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
