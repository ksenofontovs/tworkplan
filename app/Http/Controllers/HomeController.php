<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Semester;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $semester = Semester::where('date_start', '<=', date('Y-m-d'))
            ->where('date_end', '>=', date('Y-m-d'))->first();
        if ($semester) {
            $weekNumner = date('W');
            if ($weekNumner % 2 === 0) {
                $evenOdd = [0, 1]; // Все и четные
            } else {
                $evenOdd = [0, 2]; // Все и нечетные
            }
            $schedules = Schedule::whereUserId(\Auth::user()->id)->whereLessonDayId(date('N'))
                ->whereSemesterId($semester->id)->whereIn('odd_even', $evenOdd)->orderBy('lesson_time_id')->get();
        }
        \View::share([
            'semester' => $semester,
            'schedules' => isset($schedules) && count($schedules) ? $schedules : null,
        ]);

        return view('home');
    }
}
