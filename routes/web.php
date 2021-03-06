<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group([
    'as' => 'cms.',
    'prefix' => 'cms',
    'middleware' => [
        'auth',
    ],
], function () {
    Route::resource('groups', 'Cms\Groups\GroupsController')->except('edit', 'update');
    Route::resource('students', 'Cms\Students\StudentsController')->except('edit', 'update');
    Route::resource('disciplines', 'Cms\Disciplines\DisciplinesController')->except('edit', 'update');
    Route::resource('semesters', 'Cms\Semesters\SemestersController');
    Route::resource('schedules', 'Cms\Schedules\SchedulesController')->except('edit', 'update');
    Route::get('visitlogs/{schedule}/index', 'Cms\VisitLogs\VisitLogsController@index')->name('visitlogs.index');
    Route::post('visitlogs/{schedule}/update', 'Cms\VisitLogs\VisitLogsController@update')->name('visitlogs.update');
    Route::get('reports', 'Cms\Reports\ReportsController@index')->name('reports.index');
    Route::post('reports/make', 'Cms\Reports\ReportsController@make')->name('reports.make');

});


Route::get('/', 'HomeController@index')->name('home');
