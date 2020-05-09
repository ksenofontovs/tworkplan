<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\Schedule;
use App\Models\Semester;
use Auth;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $filters = $request->getRequestData();
        $date = date('Y-m-d');
        $weekNumber = date('W');
        $dayNumber = date('N');
        if (isset($filters['date']) && $timestamp = strtotime($filters['date'])) {
            $date = date('Y-m-d', $timestamp);
            $weekNumber = date('W', $timestamp);
            $dayNumber = date('N', $timestamp);
        }
        $semester = Semester::where('date_start', '<=', $date)
            ->where('date_end', '>=', $date)->first();
        if ($semester) {
            if ($weekNumber % 2 === 0) {
                $evenOdd = [0, 1]; // Все и четные
            } else {
                $evenOdd = [0, 2]; // Все и нечетные
            }
            $schedules = Schedule::whereUserId(Auth::user()->id)->whereLessonDayId($dayNumber)
                ->whereSemesterId($semester->id)->whereIn('even_odd', $evenOdd)->orderBy('lesson_time_id')->get();
        }
        View::share([
            'semester' => $semester,
            'schedules' => isset($schedules) && count($schedules) ? $schedules : null,
            'date' => $date,
        ]);

        return view('home');
    }
}
