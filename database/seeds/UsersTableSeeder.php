<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class, 1)->create([
            'email' => 'test@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('test@test.com'),
            'type' => \App\Models\User::TYPE_ADMIN,
        ]);
        factory(\App\Models\User::class, 1)->create([
            'email' => 'teacher@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('teacher@test.com'),
            'type' => \App\Models\User::TYPE_USER,
        ]);
    }
}
