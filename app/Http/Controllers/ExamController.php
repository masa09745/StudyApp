<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exam;


class ExamController extends Controller
{

    public function index()
    {
        return Exam::all();
    }

    public function store(Request $request)
    {
        $file_name = $request->file->getClientOriginalName();
        $request->file->storeAs('public/', $file_name);

        $exam = new Exam();
        $exam->date = $request->date;
        $exam->file_path = 'storage/' . $file_name;
        $exam->save();

        return $exam;

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
