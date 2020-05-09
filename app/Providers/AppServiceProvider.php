<?php

namespace App\Providers;

use App\Services\Disciplines\Repositories\DisciplineRepositoryInterface;
use App\Services\Disciplines\Repositories\EloquentDisciplineRepository;
use App\Services\Groups\Repositories\EloquentGroupRepository;
use App\Services\Groups\Repositories\GroupRepositoryInterface;
use App\Services\Schedules\Repositories\EloquentScheduleRepository;
use App\Services\Schedules\Repositories\ScheduleRepositoryInterface;
use App\Services\Semesters\Repositories\EloquentSemesterRepository;
use App\Services\Semesters\Repositories\SemesterRepositoryInterface;
use App\Services\Students\Repositories\EloquentStudentRepository;
use App\Services\Students\Repositories\StudentRepositoryInterface;
use App\Services\VisitLogs\Repositories\EloquentVisitLogRepository;
use App\Services\VisitLogs\Repositories\VisitLogRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GroupRepositoryInterface::class, EloquentGroupRepository::class);
        $this->app->bind(StudentRepositoryInterface::class, EloquentStudentRepository::class);
        $this->app->bind(DisciplineRepositoryInterface::class, EloquentDisciplineRepository::class);
        $this->app->bind(SemesterRepositoryInterface::class, EloquentSemesterRepository::class);
        $this->app->bind(ScheduleRepositoryInterface::class, EloquentScheduleRepository::class);
        $this->app->bind(VisitLogRepositoryInterface::class, EloquentVisitLogRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
