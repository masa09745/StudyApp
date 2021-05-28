<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Exam::create([
                'exam_date'.$i
            ]);
        }
    }
}
