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
        $exam = Exam::create($request->all());
        $exam->subjects()->attach(Subject::all());
    }

    public function show($id)
    {
        $exam = \App\Models\Exam::find($id);
        return $exam;
    }

    public function update(Request $request, $id)
    {
        $exam = \App\Models\Exam::find($id);
        $exam->exam_date = $request->exam_date;
        $exam->save();
    }

    public function destroy($id)
    {
        $exam = \App\Models\Exam::find($id);
        $exam->delete();
    }
}
