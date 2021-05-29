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

    public function update(Request $request, Exam $exam)
    {
        $exam->update($request->all());

        return $exam;
    }

    public function destroy(Exam $exam)
    {
        $exam->delete();

        return $exam;
    }
}
