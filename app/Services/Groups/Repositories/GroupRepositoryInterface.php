<?php

namespace App\Services\Groups\Repositories;

use App\Models\Group;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface GroupRepositoryInterface
{

    public function find(int $id): ?Group;

    public function search(array $filters): LengthAwarePaginator;

    public function selectAll(): Collection;

    public function createFromArray(array $data): Group;

    public function updateFromArray(Group $model, array $data): Group;

    public function delete(Group $model);
}
