<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;

class QuestionController extends Controller
{

    public function GetQuestionsBySubject($subjectId)
    {
        $questions = DB::table('questions')
        ->where([
            ['subject_id', '=', $subjectId]
        ])
        ->get();

        return $questions;
    }

    public function index()
    {
        return Question::all();

    }

    public function store(Request $request)
    {
        Question::create($request->all());
    }
}