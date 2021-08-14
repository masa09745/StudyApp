<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        return Subject::all();
    }

    public function show($id)

    {
        $question = Subject::with('questions')->find($id);
        return $question;
    }
}
