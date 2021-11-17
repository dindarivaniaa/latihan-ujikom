<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'NIS' => '657483920',
            'users_id' => '3',
            'gender' => 'laki-laki',
            'TTL' => 'Palembang, 30 Desember',
            'agama' => 'islam',
        ]);
    }
}
