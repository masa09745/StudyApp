<?php

namespace App\Http\Controllers;

use App\Models\Subject;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('JpJsonResponse');
    }

    public function show($id)

    {
        $subject = Subject::select(['name','exam_id'])->with('Exam')->find($id);

        return $subject;
    }
}
