<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'NIP' => '0192837465',
            'users_id' => '2',
            'gender' => 'laki-laki',
            'TTL' => 'Papua, 30 Februari',
            'agama' => 'islam',
            'mapel' => 'pjok',
        ]);

    }
}
