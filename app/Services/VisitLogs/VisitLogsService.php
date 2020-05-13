<?php

namespace App\Services\VisitLogs;

use App\Models\Schedule;
use App\Models\VisitLog;
use App\Services\Students\StudentsService;
use App\Services\VisitLogs\Repositories\VisitLogRepositoryInterface;

class VisitLogsService
{

    private VisitLogRepositoryInterface $repository;
    private StudentsService $studentsService;

    public function __construct(VisitLogRepositoryInterface $repository, StudentsService $studentsService)
    {
        $this->repository = $repository;
        $this->studentsService = $studentsService;
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function search(array $filters)
    {
        return $this->repository->search($filters);
    }

    public function searchOne(array $filters)
    {
        return $this->repository->searchOne($filters);
    }

    public function searchAll(array $filters)
    {
        return $this->repository->searchAll($filters);
    }

    public function create(array $data, Schedule $schedule)
    {
        $params = ['group_id' => $schedule->group_id];
        if ($schedule->subgroup) {
            $params['subgroup'] = $schedule->subgroup;
        }
        $students = $this->studentsService->searchAll($params);
        $commonData = [
            'date' => $data['date'],
            'schedule_id' => $schedule->id,
        ];
        foreach ($students as $student) {
            $params = $commonData;
            $params['student_id'] = $student->id;
            $visitLog = $this->searchOne($params);
            if (!$visitLog) {
                $this->repository->createFromArray($params);
            }
        }
    }

    public function update(array $data, Schedule $schedule)
    {
        $params = ['group_id' => $schedule->group_id];
        if ($schedule->subgroup) {
            $params['subgroup'] = $schedule->subgroup;
        }
        $students = $this->studentsService->searchAll($params);
        $commonData = [
            'date' => $data['date'],
            'schedule_id' => $schedule->id,
        ];
        foreach ($students as $student) {
            $params = $commonData;
            $params['student_id'] = $student->id;
            $visitLog = $this->searchOne($params);
            if (isset($data['absent'][$student->id])) {
                $params['absent'] = $data['absent'][$student->id];
            } else {
                $params['absent'] = false;
            }
            if (isset($data['mark'][$student->id])) {
                $params['mark'] = $data['mark'][$student->id];
            } else {
                $params['mark'] = null;
            }
            if ($visitLog) {
                $this->repository->updateFromArray($visitLog, $params);
            }
        }
    }

    public function delete(VisitLog $model)
    {
        return $this->repository->delete($model);
    }

}
