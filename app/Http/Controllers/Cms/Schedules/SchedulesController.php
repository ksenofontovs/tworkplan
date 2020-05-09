<?php

namespace App\Http\Controllers\Cms\Schedules;

use App\Http\Controllers\Cms\Schedules\Requests\StoreScheduleRequest;
use App\Http\Controllers\Cms\Schedules\Requests\UpdateScheduleRequest;
use App\Models\Schedule;
use App\Services\Schedules\SchedulesService;
use App\Http\Requests\Request;
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
            'schedules' => $this->schedulesService->search($request->getRequestData()),
        ]);

        return view('cms.schedules.index');
    }

    public function create()
    {
        $this->schedulesService->viewShareDependence();
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
        $this->schedulesService->viewShareDependence();
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
}
