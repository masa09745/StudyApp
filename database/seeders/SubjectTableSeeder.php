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
                'id' => '1',
                'name' => '法規',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'name' => '機体',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'name' => '発動機',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '4',
                'name' => '電気・電子装備品',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
