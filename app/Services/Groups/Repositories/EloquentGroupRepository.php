<?php

namespace App\Services\Groups\Repositories;

use App\Models\Group;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class EloquentGroupRepository implements GroupRepositoryInterface
{
    public function find(int $id): ?Group
    {
        return Group::find($id);
    }

    public function search(array $filters): LengthAwarePaginator
    {
        return Group::orderBy('id', 'desc')->paginate(15);
    }

    public function selectAll(): Collection
    {
        return Group::all();
    }

    public function createFromArray(array $data): Group
    {
        return Group::create($data);
    }

    public function updateFromArray(Group $model, array $data): Group
    {
        $model->update($data);
        return $model;
    }

    public function delete(Group $model)
    {
        $model->delete();
    }
}
