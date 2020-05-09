<?php

namespace App\Services\VisitLogs\Repositories;

use App\Models\VisitLog;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class EloquentVisitLogRepository implements VisitLogRepositoryInterface
{
    public function find(int $id): ?VisitLog
    {
        return VisitLog::find($id);
    }

    public function search(array $filters): LengthAwarePaginator
    {
        $visitLog = (new VisitLog)->newQuery();
        /*if (isset($filters['group_id']) && is_numeric($filters['group_id'])) {
            $visitLog->whereGroupId($filters['group_id']);
        } else {
            $visitLog->orderBy('group_id', 'desc');
        }*/
        return $visitLog->orderBy('name', 'asc')->paginate(15);
    }

    public function searchOne(array $filters): ?VisitLog
    {
        $visitLog = (new VisitLog)->newQuery();
        if (isset($filters['date'])) {
            $visitLog->whereDate('date', '=', $filters['date']);
        }
        if (isset($filters['student_id'])) {
            $visitLog->whereStudentId($filters['student_id']);
        }
        if (isset($filters['schedule_id'])) {
            $visitLog->whereScheduleId($filters['schedule_id']);
        }
        return $visitLog->first();
    }

    public function createFromArray(array $data): VisitLog
    {
        return VisitLog::create($data);
    }

    public function updateFromArray(VisitLog $model, array $data): VisitLog
    {
        $model->update($data);
        return $model;
    }

    public function delete(VisitLog $model)
    {
        $model->delete();
    }


}
