<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('group_id');
            $table->unsignedTinyInteger('subgroup')->nullable();
            $table->unsignedBigInteger('discipline_id');
            $table->unsignedBigInteger('lesson_type_id');
            $table->unsignedBigInteger('odd_even')->default(0);
            $table->unsignedBigInteger('half_lesson')->default(0);
            $table->unsignedBigInteger('semester_id');
            $table->unsignedBigInteger('lesson_day_id');
            $table->unsignedBigInteger('lesson_time_id');
            $table->unsignedBigInteger('type_load')->default(1);
            $table->unsignedSmallInteger('audience');
            $table->timestamps();

            $table->foreign('group_id')
                ->on('groups')
                ->references('id')
                ->onDelete('restrict');

            $table->foreign('discipline_id')
                ->on('disciplines')
                ->references('id')
                ->onDelete('restrict');

            $table->foreign('lesson_type_id')
                ->on('lesson_types')
                ->references('id')
                ->onDelete('restrict');

            $table->foreign('semester_id')
                ->on('semesters')
                ->references('id')
                ->onDelete('restrict');

            $table->foreign('lesson_day_id')
                ->on('lesson_days')
                ->references('id')
                ->onDelete('restrict');

            $table->foreign('lesson_time_id')
                ->on('lesson_times')
                ->references('id')
                ->onDelete('restrict');

            $table->unique(['user_id', 'semester_id', 'lesson_day_id', 'lesson_time_id', 'odd_even', 'half_lesson']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
