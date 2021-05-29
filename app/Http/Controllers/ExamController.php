<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        return \App\Models\Exam::all();
    }

    public function store(Request $request)
    {
        return \App\Models\Exam::create($request->all());
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

    public function destroy(Exam $exam)
    {
        $exam->delete();

        return $exam;
    }
}
