<?php

namespace App\Providers;

use App\Services\Groups\Repositories\EloquentGroupRepository;
use App\Services\Groups\Repositories\GroupRepositoryInterface;
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
