<?php

namespace App\Services\Semesters\Repositories;

use App\Models\Semester;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface SemesterRepositoryInterface
{

    public function find(int $id): ?Semester;

    public function search(array $filters): LengthAwarePaginator;

    public function createFromArray(array $data): Semester;

    public function updateFromArray(Semester $model, array $data): Semester;

    public function delete(Semester $model);
}
