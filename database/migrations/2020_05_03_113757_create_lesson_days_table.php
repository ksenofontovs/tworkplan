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
                ['title' => 'Понедельник', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['title' => 'Вторник', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['title' => 'Среда', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['title' => 'Четверг', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['title' => 'Пятница', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['title' => 'Суббота', 'created_at' => date('c'), 'updated_at'=> date('c')],
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
