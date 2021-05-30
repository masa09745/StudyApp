<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Subjects')->insert([
            [
                'subject' => '法規'
            ],
            [
                'subject' => '機体'
            ],
            [
                'subject' => '発動機'
            ],
            [
                'subject' => '電気・電子装備品'
            ]
        ]);
    }
}