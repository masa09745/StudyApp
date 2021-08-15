<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index(Request $request) {
        $subjectId = $request->id;
        $questions = DB::table('questions')
        ->where([
            ['subject_id', '=', $subjectId]
        ])
        ->get();

        return $questions;
    }

    public function store(Request $request)
    {
        return Question::create($request->all());

    }
}