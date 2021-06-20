<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exam;


class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('JpJsonResponse');
    }

    public function index()
    {
        return Exam::all();
    }

    public function store(Request $request)
    {
        return Exam::create($request->all());

    }

    public function show($id)
    {
        $exam = Exam::find($id);
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
