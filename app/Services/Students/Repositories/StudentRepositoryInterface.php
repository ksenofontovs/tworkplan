<?php

namespace App\Services\Students\Repositories;

use App\Models\Student;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface StudentRepositoryInterface
{

    public function find(int $id): ?Student;

    public function search(array $filters): LengthAwarePaginator;

    public function searchAll(array $filters): Collection;

    public function createFromArray(array $data): Student;

    public function updateFromArray(Student $model, array $data): Student;

    public function delete(Student $model);
}
