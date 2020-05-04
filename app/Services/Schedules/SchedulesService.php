<?php

namespace App\Services\Schedules;

use App\Models\Schedule;
use App\Services\Schedules\Repositories\ScheduleRepositoryInterface;
use Illuminate\Http\Request;

class SchedulesService
{

    private ScheduleRepositoryInterface $repository;

    public function __construct(ScheduleRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function search(Request $request)
    {
        return $this->repository->search($request);
    }

    public function create(array $data)
    {
        return $this->repository->createFromArray($data);
    }

    public function update(Schedule $model, array $data)
    {
        return $this->repository->updateFromArray($model, $data);
    }

    public function delete(Schedule $model)
    {
        return $this->repository->delete($model);
    }

}
