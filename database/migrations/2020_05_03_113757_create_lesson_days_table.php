<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_days', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        DB::table('lesson_days')->insert(
            [
                ['id' => 1, 'title' => 'Понедельник', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['id' => 2, 'title' => 'Вторник', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['id' => 3, 'title' => 'Среда', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['id' => 4, 'title' => 'Четверг', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['id' => 5, 'title' => 'Пятница', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['id' => 6, 'title' => 'Суббота', 'created_at' => date('c'), 'updated_at'=> date('c')],
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
        Schema::dropIfExists('lesson_days');
    }
}
