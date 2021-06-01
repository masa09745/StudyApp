<?php

namespace App\Http\Controllers;

use App\Models\Subject;
class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('JpJsonResponse');
    }

    public function index()
    {
        return Subject::all();
    }
}
