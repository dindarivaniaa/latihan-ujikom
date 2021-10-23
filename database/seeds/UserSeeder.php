<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@role.test',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        $teacher = User::create([
            'name' => 'Teacher Role',
            'email' => 'teacher@role.test',
            'password' => bcrypt('12345678')
        ]);

        $teacher->assignRole('teacher');

        $student = User::create([
            'name' => 'Student Role',
            'email' => 'student@role.test',
            'password' => bcrypt('12345678')
        ]);

        $student->assignRole('student');
    }
}
