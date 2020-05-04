<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Models\Group::all() as $group) {
            factory(\App\Models\Student::class, 30)->create([
                'group_id' => $group->id,
            ]);
        }
    }
}
