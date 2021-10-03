<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Question;
use Illuminate\Http\Request;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;

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

    public function ImportQuestionsData(Request $request)
    {
        $tmpName = mt_rand().".".$request->file('csv_file')->guessExtension();
        $request->file('csv_file')->move(public_path(). "/csv/tmp", $tmpName);
        $tmpPath = public_path()."/csv/tmp/".$tmpName;

        $config = new LexerConfig();
        $lexer = new Lexer($config);


        $config->setIgnoreHeaderLine(true);

        $dataList = [];

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$dataList) {
            $dataList[] = $row;
        });

        $lexer->parse($tmpPath, $interpreter);

        unlink($tmpPath);

        foreach($dataList as $row) {
            Question::insert([
                'id' => $row[0],
                'text' => $row[1],
                'answer' => $row[2],
                'explanation' => $row[3],
                'subject_id' => $row[4],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        };

    }

    public function ImportChoicesData(Request $request)
    {
        $tmpName = mt_rand().".".$request->file('csv_file')->guessExtension();
        $request->file('csv_file')->move(public_path(). "/csv/tmp", $tmpName);
        $tmpPath = public_path()."/csv/tmp/".$tmpName;

        $config = new LexerConfig();
        $lexer = new Lexer($config);


        $config->setIgnoreHeaderLine(true);

        $dataList = [];

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$dataList) {
            $dataList[] = $row;
        });

        $lexer->parse($tmpPath, $interpreter);

        unlink($tmpPath);

        foreach($dataList as $row) {
            Choice::insert([
                'id' => $row[0],
                'content' => $row[1],
                'question_id' => $row[2],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        };

    }
}