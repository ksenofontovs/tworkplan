<?php

namespace App\Services\Disciplines\Repositories;

use App\Models\Discipline;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class EloquentDisciplineRepository implements DisciplineRepositoryInterface
{
    public function find(int $id): ?Discipline
    {
        return Discipline::find($id);
    }

    public function search(Request $request): LengthAwarePaginator
    {
        return Discipline::orderBy('id', 'desc')->paginate(15);
    }

    public function createFromArray(array $data): Discipline
    {
        return Discipline::create($data);
    }

    public function updateFromArray(Discipline $model, array $data): Discipline
    {
        $model->update($data);
        return $model;
    }

    public function delete(Discipline $model)
    {
        $model->delete();
    }


}
