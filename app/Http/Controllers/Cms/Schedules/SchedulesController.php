<?php

namespace App\Http\Controllers\Cms\Schedules;

use App\Http\Controllers\Cms\Schedules\Requests\StoreScheduleRequest;
use App\Http\Controllers\Cms\Schedules\Requests\UpdateScheduleRequest;
use App\Models\Discipline;
use App\Models\Group;
use App\Models\LessonDay;
use App\Models\LessonTime;
use App\Models\LessonType;
use App\Models\Schedule;
use App\Models\Semester;
use App\Services\Schedules\SchedulesService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;

class SchedulesController extends Controller
{

    private SchedulesService $schedulesService;

    public function __construct(SchedulesService $schedulesService)
    {
        $this->schedulesService = $schedulesService;
    }

    public function index(Request $request)
    {
        View::share([
            'schedules' => $this->schedulesService->search($request),
        ]);

        return view('cms.schedules.index');
    }

    public function create()
    {
        $this->viewShareDependence();
        return view('cms.schedules.create');
    }

    public function store(StoreScheduleRequest $request)
    {
        $this->schedulesService->create($request->getFormData());
        return redirect()->route('cms.schedules.index')->with('message', 'Расписание успешно добавлено.');
    }

    public function show(Schedule $schedule)
    {
        View::share([
            'schedule' => $schedule,
        ]);
        return view('cms.schedules.show');
    }

    public function edit(Schedule $schedule)
    {
        $this->viewShareDependence();
        View::share([
            'schedule' => $schedule,
        ]);
        return view('cms.schedules.edit');
    }

    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $this->schedulesService->update($schedule, $request->getFormData());
        return redirect()->route('cms.schedules.index')->with('message', ' Расписание успешно сохранено.');
    }

    public function destroy(Schedule $schedule)
    {
        $this->schedulesService->delete($schedule);
        return redirect()->route('cms.schedules.index')->with('message', 'Расписание успешно удалено.');
    }

    private function viewShareDependence()
    {
        View::share([
            'groups' => Group::get()->pluck('title', 'id'),
            'disciplines' => Discipline::get()->pluck('title_level', 'id'),
            'lessonType' => LessonType::pluck('title', 'id'),
            'semesters' => Semester::get()->pluck('dates', 'id'),
            'lessonDays' => LessonDay::pluck('title', 'id'),
            'lessonTimes' => LessonTime::get()->pluck('times', 'id'),
        ]);
    }
}
