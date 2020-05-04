<?php

namespace App\Services\Schedules\Repositories;

use App\Models\Schedule;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class EloquentScheduleRepository implements ScheduleRepositoryInterface
{
    public function find(int $id): ?Schedule
    {
        return Schedule::find($id);
    }

    public function search(Request $request): LengthAwarePaginator
    {
        return Schedule::orderBy('id', 'desc')->paginate(15);
    }

    public function createFromArray(array $data): Schedule
    {
        return Schedule::create($data);
    }

    public function updateFromArray(Schedule $model, array $data): Schedule
    {
        $model->update($data);
        return $model;
    }

    public function delete(Schedule $model)
    {
        $model->delete();
    }


}
