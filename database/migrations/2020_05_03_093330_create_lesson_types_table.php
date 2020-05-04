<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateLessonTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        DB::table('lesson_types')->insert(
            [
                ['title' => 'Лекция', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['title' => 'Практика', 'created_at' => date('c'), 'updated_at'=> date('c')],
                ['title' => 'Экзамен', 'created_at' => date('c'), 'updated_at'=> date('c')],
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
        Schema::dropIfExists('lesson_types');
    }
}
