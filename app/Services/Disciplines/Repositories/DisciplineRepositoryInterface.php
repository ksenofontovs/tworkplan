<?php

namespace App\Services\Disciplines\Repositories;

use App\Models\Discipline;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

interface DisciplineRepositoryInterface
{

    public function find(int $id): ?Discipline;

    public function search(Request $request): LengthAwarePaginator;

    public function createFromArray(array $data): Discipline;

    public function updateFromArray(Discipline $model, array $data): Discipline;

    public function delete(Discipline $model);
}
