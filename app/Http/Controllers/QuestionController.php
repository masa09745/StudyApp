<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        $file_name = $request->file->getClientOriginalName();
        $request->file->storeAs('public/', $file_name);
    }
}

