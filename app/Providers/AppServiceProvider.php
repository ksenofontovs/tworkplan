<?php

namespace App\Providers;

use App\Services\Disciplines\Repositories\DisciplineRepositoryInterface;
use App\Services\Disciplines\Repositories\EloquentDisciplineRepository;
use App\Services\Groups\Repositories\EloquentGroupRepository;
use App\Services\Groups\Repositories\GroupRepositoryInterface;
use App\Services\Semesters\Repositories\EloquentSemesterRepository;
use App\Services\Semesters\Repositories\SemesterRepositoryInterface;
use App\Services\Students\Repositories\EloquentStudentRepository;
use App\Services\Students\Repositories\StudentRepositoryInterface;
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
