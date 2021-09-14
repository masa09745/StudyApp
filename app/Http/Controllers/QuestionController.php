<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function GetQuestionsBySubject($subjectId)
    {
        $questions = Question::with('choices')->where([['subject_id', '=', $subjectId]])->get();

        return $questions;
    }

    public function index()
    {
        return Question::all();

    }

    public function store(Request $request)
    {
        $question = Question::create($request->all());
        $questionId = $question->id;

        $choiceData = $request->get('choices');

        foreach($choiceData as $question){
            $choiceContent = New Choice();
            $choiceContent->question_id = $questionId;
            $choiceContent->content = $question;
            $choiceContent->save();
        }
    }
}