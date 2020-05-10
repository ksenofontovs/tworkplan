<?php

namespace App\Services\Schedules;

use App\Models\Schedule;
use App\Services\Schedules\Repositories\ScheduleRepositoryInterface;
use App\Models\Discipline;
use App\Models\Group;
use App\Models\LessonDay;
use App\Models\LessonTime;
use App\Models\LessonType;
use App\Models\Semester;
use View;

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

    public function search(array $filters)
    {
        return $this->repository->search($filters);
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

    public function viewShareDependence()
    {
        View::share([
            'groups' => Group::get()->pluck('title', 'id'),
            'disciplines' => Discipline::get()->pluck('title_level', 'id'),
            'lessonType' => LessonType::pluck('title', 'id'),
            'semesters' => Semester::orderByDesc('date_start')->get()->pluck('dates', 'id'),
            'lessonDays' => LessonDay::pluck('title', 'id'),
            'lessonTimes' => LessonTime::get()->pluck('times', 'id'),
        ]);
    }

}
