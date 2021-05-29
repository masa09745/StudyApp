<?php

namespace App\Http\Controllers;

use App\Exam;

class ExamController extends Controller
{
    public function index()
    {
        return Exam::all();
    }
}
