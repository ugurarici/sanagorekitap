<?php

namespace App\Http\Controllers;

use Auth;
use App\Question;
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

	public function store(Request $r)
	{
		$validationRules = array(
			'question' => 'required|min:15|max:1000'
			);

		if(! is_null($r->get('email'))) $validationRules['email'] = 'email';
		
		$this->validate($r, $validationRules);

		$newQuestion = new Question;
		$newQuestion->body = $r->get('question');
		$newQuestion->user_email = $r->get('email');
		if (Auth::check()) $newQuestion->user_id = Auth::id();
		$newQuestion->save();

		//	@todo: editörlere yeni soru geldiğine dair e-posta göndermeli

		return view('question.store')->with('id', $newQuestion->id);
	}

	public function show(Question $question)
	{
		return view('question.show')->with('question', $question);
	}
}
