<?php

namespace App\Services\VisitLogs\Repositories;

use App\Models\VisitLog;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface VisitLogRepositoryInterface
{

    public function find(int $id): ?VisitLog;

    public function search(array $filters): LengthAwarePaginator;

    public function searchOne(array $filters): ?VisitLog;

    public function searchAll(array $filters): Collection;

    public function createFromArray(array $data): VisitLog;

    public function updateFromArray(VisitLog $model, array $data): VisitLog;

    public function delete(VisitLog $model);
}
