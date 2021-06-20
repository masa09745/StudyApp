<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exam;
use App\Models\Subject;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('JpJsonResponse');
    }

    public function index()
    {
        return Exam::with('subjects')->get();
    }

    public function store(Request $request)
    {


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
