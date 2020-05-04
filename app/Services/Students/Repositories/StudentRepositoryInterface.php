<?php

namespace App\Services\Students\Repositories;

use App\Models\Student;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

interface StudentRepositoryInterface
{

    public function find(int $id): ?Student;

    public function search(Request $request): LengthAwarePaginator;

    public function createFromArray(array $data): Student;

    public function updateFromArray(Student $model, array $data): Student;

    public function delete(Student $model);
}
