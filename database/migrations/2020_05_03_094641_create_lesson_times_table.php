<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateLessonTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_times', function (Blueprint $table) {
            $table->id();
            $table->time('time_start');
            $table->time('time_end');
            $table->timestamps();
        });

        DB::table('lesson_times')->insert(
            [
                ['time_start' => '08:00:00', 'time_end' => '09:30:00', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['time_start' => '09:40:00', 'time_end' => '11:10:00', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['time_start' => '11:20:00', 'time_end' => '12:50:00', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['time_start' => '13:20:00', 'time_end' => '14:50:00', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['time_start' => '15:10:00', 'time_end' => '16:40:00', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['time_start' => '16:50:00', 'time_end' => '18:20:00', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['time_start' => '18:30:00', 'time_end' => '20:00:00', 'created_at' => date('c'), 'updated_at'=> date('c')],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_times');
    }
}
