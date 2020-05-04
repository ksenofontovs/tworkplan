<?php

use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Models\User::where('type', '=', \App\Models\User::TYPE_USER)->get() as $user) {
            factory(\App\Models\Schedule::class, 20)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
