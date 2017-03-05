<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
    	return view('home');
    }

    public function create()
    {
    	return view('question.new');
    }
}
