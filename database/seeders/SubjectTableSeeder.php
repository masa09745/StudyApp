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
                'name' => '法規'
            ],
            [
                'name' => '機体'
            ],
            [
                'name' => '発動機'
            ],
            [
                'name' => '電気・電子装備品'
            ]
        ]);
    }
}
