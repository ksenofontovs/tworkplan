<?php

namespace App\Services\Schedules\Repositories;

use App\Models\Schedule;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

interface ScheduleRepositoryInterface
{

    public function find(int $id): ?Schedule;

    public function search(Request $request): LengthAwarePaginator;

    public function createFromArray(array $data): Schedule;

    public function updateFromArray(Schedule $model, array $data): Schedule;

    public function delete(Schedule $model);
}
