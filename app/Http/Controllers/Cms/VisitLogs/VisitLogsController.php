<?php

namespace App\Http\Controllers\Cms\VisitLogs;

use App\Http\Controllers\Cms\VisitLogs\Requests\UpdateVisitLogRequest;
use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\VisitLog;
use App\Services\Students\StudentsService;
use App\Services\VisitLogs\VisitLogsService;
use App\Http\Requests\Request;
use View;
use Auth;
use App\Models\Semester;

class VisitLogsController extends Controller
{

    private VisitLogsService $visitLogsService;
    private StudentsService $studentsService;

    public function __construct(VisitLogsService $visitLogsService, StudentsService $studentsService)
    {
        $this->visitLogsService = $visitLogsService;
        $this->studentsService = $studentsService;
    }


    public function index(Request $request, Schedule $schedule)
    {
        $filters = $request->getRequestData();
        $date = $filters['date'];
        $timestamp = strtotime($date);
        $date = date('Y-m-d', $timestamp);
        $weekNumber = date('W', $timestamp);
        $dayNumber = date('N', $timestamp);
        $semester = Semester::where('date_start', '<=', $date)
            ->where('date_end', '>=', $date)->first();
        $schedules = [];
        if ($semester) {
            if ($weekNumber % 2 === 0) {
                $evenOdd = [0, 1]; // Все и четные
            } else {
                $evenOdd = [0, 2]; // Все и нечетные
            }
            $schedules = Schedule::whereId($schedule->id)->whereUserId(Auth::user()->id)->whereLessonDayId($dayNumber)
                ->whereSemesterId($semester->id)->whereIn('even_odd', $evenOdd)->orderBy('lesson_time_id')->get();
        }
        if (!count($schedules)) {
            return redirect()->route('home')->withErrors(['Ошибка загрузки журнала посещений.']);
        }
        $this->visitLogsService->create($filters, $schedule);

        $params = [
            'group_id' => $schedule->group_id,
            'schedule_id' => $schedule->id,
            'date' => $date,
        ];

        View::share([
            'visitLogs' => $this->visitLogsService->searchAll($params),
        ]);

        return view('cms.visitlogs.index')->with('schedule', $schedule)->with('date', $date);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request, Schedule $schedule)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisitLog  $visitLog
     * @return \Illuminate\Http\Response
     */
    public function show(VisitLog $visitLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisitLog  $visitLog
     * @return \Illuminate\Http\Response
     */
    public function edit(VisitLog $visitLog)
    {
        //
    }

    public function update(UpdateVisitLogRequest $request, Schedule $schedule)
    {
        $filters = $request->getFormData();
        $this->visitLogsService->update($filters, $schedule);
        return redirect()->route('home', ['date' => $filters['date']])->with('message', 'Журнал посещений успешно сохранен.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisitLog  $visitLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisitLog $visitLog)
    {
        //
    }
}
