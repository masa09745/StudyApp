<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exam;
use App\Models\Subject;

class ExamController extends Controller
{

    public function index()
    {
        return Exam::all();
    }

    public function store(Request $request)
    {
        $data = [
            'subjects' => [
                ['name' => '法規', 'route' => 'row'],
                ['name' => '機体', 'route' => 'airplane'],
                ['name' => '発動機', 'route' => 'engine'],
                ['name' => '電気・電子装備品', 'route' => 'electronics']
            ]
        ];
        $subjects = [];

        foreach($data['subjects'] as $subject){
            $subjects[] = new Subject($subject);
        }

        Exam::create($request->all())->subjects()->saveMany($subjects);
    }

    public function show($id)
    {
        $exam = Exam::with('subjects')->find($id);
        return $exam;
    }

    public function update(Request $request, $id)
    {
        $exam = Exam::find($id);
        $exam->exam_date = $request->exam_date;
        $exam->save();
    }

    public function destroy($id)
    {
        $exam = Exam::find($id);
        $exam->delete();
    }
}
