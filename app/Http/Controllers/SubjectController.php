<?php

namespace App\Http\Controllers;


class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('JpJsonResponse');
    }

    public function index()
    {
        return \App\Models\Subject::all();
    }
}
