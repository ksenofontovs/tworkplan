<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_logs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('schedule_id');
            $table->boolean('absent')->default(false);
            $table->unsignedTinyInteger('mark')->nullable();
            $table->timestamps();

            $table->foreign('student_id')
                ->on('students')
                ->references('id')
                ->onDelete('restrict');

            $table->foreign('schedule_id')
                ->on('schedules')
                ->references('id')
                ->onDelete('restrict');

            $table->unique(['date', 'student_id', 'schedule_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visit_logs');
    }
}
