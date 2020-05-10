<?php

namespace App\Services\Reports;

use App\Models\Schedule;
use App\Models\VisitLog;
use View;
use App\Models\Discipline;
use App\Models\Group;
use App\Models\Semester;
use DB;

class ReportsService
{

    public function make(array $request)
    {
        $scheduleIds = Schedule::whereDisciplineId($request['discipline_id'])->whereGroupId($request['group_id'])
            ->whereSemesterId($request['semester_id'])->get('id');
        $visitLogs = VisitLog::whereIn('schedule_id', $scheduleIds)
            ->select(
                DB::raw('sum(mark)/count(mark)::float AS average_mark'),
                DB::raw('sum(CAST(ABSENT AS int) * (CASE WHEN schedules.half_lesson IN (1,2) THEN 1 ELSE 2 END)) as count_absent'),
                'students.name'
            )->join('students', 'students.id', '=', 'visit_logs.student_id')
            ->join('schedules', 'schedules.id', '=', 'visit_logs.schedule_id')
            ->groupBy('student_id', 'students.name')->orderBy('students.name')->get();
        View::share([
            'reports' => $visitLogs,
        ]);
    }

    public function viewShareDependence()
    {
        View::share([
            'groups' => Group::get()->pluck('title', 'id'),
            'disciplines' => Discipline::get()->pluck('title_level', 'id'),
            'semesters' => Semester::orderByDesc('date_start')->get()->pluck('dates', 'id'),
        ]);
    }


}
